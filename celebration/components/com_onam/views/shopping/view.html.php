<?php



defined('_JEXEC') or die;

jimport( 'joomla.application.component.view');

class OnamViewShopping extends JView

{

    var $_packages=null;

    var $_result=null;

    var $_what=null;

    var $_cat=null;

    var $_subCat=null;

    var $_where=null;

    var $_hotel=null;

    var $_destinations=null;

    var $_paginationUrl=null;

       var $_rescount=null;

	public function display($tpl = null)

	{

            	$app		=   JFactory::getApplication();

                $params         =   $app->getParams();

		$this->getOnamShopping($params);

		$this->getcity($params);

		parent::display($tpl);

	}

        

        public function getOnamShopping($params){



            $url='http://microcommunity.getit.in/ypxmldata.aspx?';

            

            if(strstr($_SERVER['REQUEST_URI'], 'book-your-hotel')){

                $what='hotels';

            }elseif(strstr($_SERVER['REQUEST_URI'], 'plan-your-trip')){

                $what='cars';

            }else{

                $what=  'Shopping';

            }

			$wat=JRequest::getVar('what');

			

			if($wat!="")

			{

				$what=JRequest::getVar('what');

				}

            $pageno=JRequest::getVar('pageno',0);

            if(isset($what)):

                $url.='what='.urlencode($what);

            endif;

            $cat=JRequest::getVar('cat');

            if(isset($cat)){

                $url.='&cat='.urlencode($cat);

                          }

            $subCat=JRequest::getVar('subcat');

            if(isset($subCat)){

                $url.='&subCat='.urlencode($subCat);

               

            }

            $where=JRequest::getVar('where');

			if($where=="")

			{

			$where="Delhi";

			}

            if(isset($where)){

                $url.='&where='.urlencode($where);

               

            }

            

            $url.='&pageno='.$pageno;

            

            echo '<span style="display: none;" id="test">url: '.$url.'</span>';

            

            $action = "My.Soap.Action";

$mySOAP = <<<EOD

                    <?xml version="1.0" encoding="utf-8" ?>

                    <soap:Envelope>

                    <!-- SOAP goes here, irrelevant so wont bother writing it out -->

                    </soap:Envelope>

EOD;



                $headers = array(

                    'Content-Type: text/xml; charset=utf-8',

                    'Content-Length: '.strlen($mySOAP),

                    'SOAPAction: '.$action

                );



                // Build the cURL session

                $ch = curl_init();

                curl_setopt($ch, CURLOPT_URL, $url);

                curl_setopt($ch, CURLOPT_POST, TRUE);

                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

                curl_setopt($ch, CURLOPT_POSTFIELDS, $mySOAP);

                curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);



                // Send the request and check the response

                if (($result = curl_exec($ch)) === FALSE) {

                    die('cURL error: '.curl_error($ch)."<br />\n");

                } else {

                    //echo "Success!<br />\n";

                }

                curl_close($ch);



                // Handle the response from a successful request

                $xmlobj = @simplexml_load_string($result);

              

                 $rescount=$xmlobj->resultcount;

                               

                if($xmlobj->success):

                    $wsResult=$xmlobj->results;

                    

                     foreach($wsResult as $val){

                        foreach($val as $value)

                        {

                            $comp[]=$value;

                        }

                    }

                    $companies=$xmlobj->categories;

                        $wsCategory=array();

                        foreach ($companies->category as $company){

                        

                            $wsCategory[]= (string)$company;

                            $wsCategories=(object)$wsCategory;

                        }

                    $cities=$xmlobj->cities;

                        $wsWhere=array();

                        foreach ($cities->City as $city){

                        

                            $wsWhere[]= (string)$city;

                            $wsWheres=(object)$wsWhere;

                        }

                       

                       

                              foreach($comp as $val){

////                                  print_r($item);

////                                  var_dump(get_object_vars($val));

//                                  die;

//                                 $items[(string) $item->key] = (string) $item;

                                  $rowt=array('companyid'=>(string)$val->companyid,

                                      'companyname'=>(string)$val->companyname,

                                    'businessemail'=>(string)$val->businessemail,

                                      'businesstype'=>(string)$val->businesstype,

                                    'category'=>(string)$val->category,

                                      'subcategory'=>(string)$val->subcategory,

                                    'address'=>(string)$val->address,

                                      'city'=>(string)$val->city,

                                      'state'=>(string)$val->state,

                                    'pincode'=>(string)$val->pincode,

                                      'latitude'=>(string)$val->latitude,

                                      'longitude'=>(string)$val->longitude,

                                    'Degreelatitude'=>(string)$val->Degreelatitude,

                                      'Degreelongitude'=>(string)$val->Degreelongitude,

                                    'zone'=>(string)$val->zone,

                                      'webste1'=>(string)$val->webste1,

                                      'phone'=>(string)$val->phone);

                                    $rows[]=(object)$rowt;	

                            }

                        $Result=$rows;                            

                else:

                    $wsResult=false;

                    $Result=false;

                endif;

                $this->_result=$Result;
				 $this->_resultcount=$rescount;



            $this->_what=  $this->what();

//            $this->_cat=  $this->categories();

            $this->_cat=  $wsCategories;

            $this->_subCat=  $this->subCategories();

            $this->_where=  $wsWheres;

            $this->_paginationUrl=JURI::base().'index.php/shopping?view='.shopping.'&what='.$what.'&cat='.$cat.'&subCat='.$subCat.'&where='.$where.'&pageno=';

           $this->_rescount =$rescount;

        }





 public function getcity($params){



           $url='http://microcommunity.getit.in/ypxmldata.aspx?';

           if(strstr($_SERVER['REQUEST_URI'], 'book-your-hotel')){

                $what='hotels';

            }elseif(strstr($_SERVER['REQUEST_URI'], 'plan-your-trip')){

                $what='cars';

            }else{

                $what=  'Shopping';

            }

            $pageno=JRequest::getVar('pageno',0);

            if(isset($what)):

                $url.='what='.urlencode($what);

            endif;

            $cat=JRequest::getVar('cat');

            if(isset($cat)){

                $url.='&cat='.urlencode($cat);

                $pageno=0;

            }

            $subCat=JRequest::getVar('subCat');

            if(isset($subCat)){

                $url.='&subCat='.urlencode($subCat);

                $pageno=0;

            }

            

            

            $url.='&pageno='.$pageno;

            

            echo '<span style="display: none;">url: '.$url.'</span>';

            

            $action = "My.Soap.Action";

$mySOAP = <<<EOD

                    <?xml version="1.0" encoding="utf-8" ?>

                    <soap:Envelope>

                    <!-- SOAP goes here, irrelevant so wont bother writing it out -->

                    </soap:Envelope>

EOD;



                $headers = array(

                    'Content-Type: text/xml; charset=utf-8',

                    'Content-Length: '.strlen($mySOAP),

                    'SOAPAction: '.$action

                );



                // Build the cURL session

                $ch = curl_init();

                curl_setopt($ch, CURLOPT_URL, $url);

                curl_setopt($ch, CURLOPT_POST, TRUE);

                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

                curl_setopt($ch, CURLOPT_POSTFIELDS, $mySOAP);

                curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);



                // Send the request and check the response

                if (($result = curl_exec($ch)) === FALSE) {

                    die('cURL error: '.curl_error($ch)."<br />\n");

                } else {

                    //echo "Success!<br />\n";

                }

                curl_close($ch);



                // Handle the response from a successful request

                $xmlobj = @simplexml_load_string($result);

               

               

                $cities=$xmlobj->cities;

                   //  print_r($cities);

                     $wsWhere=array();

                        foreach ($cities->City as $city){

                        

                            $wsWhe[]= (string)$city;

                            $wsWh=(object)$wsWhe;

                        }

                        $this->_whe=$wsWh;

               

               

                  }

                  

                  

        public function what(){

            $whats=array(

                'Air Conditioning and Refrigeration',

                'Computers, Communications & Services',

                    'Consultants & Professionals',

                    'Electronics & Electricals- Comml. & Indl',

                    'Energy & Power',

                    'Environment',

                    'Food & Beverage',

                    'Industrial Equipments & Machinery',

                    'Livestock & Agriculture',

                    'Metals & Minerals',

                    'Packaging & Printing',

                    'Safety & Security',

                    'Textile & Leather',

                    'Arts, Events & Occasions',

                    'Automotive',

                    'Computer, IT & Telecom',

                    'Dining & Leisure',

                    'Electricals & Electronics',

                    'Furniture & Furnishing',

                    'Health & Beauty',

                    'Home, Garden & Pets',

                    'Services',

                    'Shopping',

                    'Social Organisations',

                    'Travel & Tourism',



            );

            return $whats;

        }

        

        public function categories(){

            $cats=array(

                'Air Conditioners',

                    'Air Conditioners & Equipments Rental & Leasing',

                    'Air Conditioning & Refrigeration Equipments',

                    'Refrigeration Storage Systems & Supplies',

                    'Audio Equipments- Indl',

                    'Communication Equipments & Services',

                    'Computer Hardware',

                    'Computer Security Products',

                    'Film & Video Production Equipments & Supplies',

                    'Performance, Recording & Studio Equipments',

                    'Radio Communication/Broadcasting Equipments',

                    'Television Broadcasting Equipments',

                    'Art & Media- Professionals',

                    'Consultants & Professionals- Metals',

                    'Gems & Precious Stones- Professionals',

                    'Lighting, Lighting Fixtures & Supplies',

                    'Power Storage Equipments & Supplies',

                    'Air Purification Equipments',

                    'Cleaning Equipments- Indl',

                    'Environment Professionals',

                    'Environment Services',

                    'Fuel Economizers',

                    'Water Treatment Processes',

                    'Bakery Equipments',

                    'Bar Fixtures & Barware',

                    'Beverage Ancillary Units',

                    'Beverage Dispensing Equipments & Supplies',

                    'Beverage Processing Equipments',

                    'Confectionery Machines',

                    'Food Bases & Additives',

                    'Food Processing Equipments',

                    'Food Production Lines',

                    'Food Servers',

                    'Food Supplies',

                    'Fruit & Vegetable Processing Equipments',

                    'Kitchen Equipments & Supplies',

                    'Meat & Fish Processing Equipments',

                    'Table Display',

                    'Industrial Heating & Drying Equipments',

                    'Industrial Machinery Parts',

                    'Laundry Equipments',

                    'Agricultural Supplies',

                    'Livestock Farming',

                    'Livestock Farming Equipments & Supplies',

                    'Processing Machines',

                    'Iron Steel & Ferro-Alloys',

                    'Minerals',

                    'Precious Metals',

                    'Sheet Metal Products',

                    'Bags & Bags Machinery',

                    'Containers- Packaging',

                    'Packaging Bottles & Closures- Products & Machinery',

                    'Packaging Machinery',

                    'Packaging Material & Supplies',

                    'Packaging Services',

                    'Paper & Paper Products',

                    'Fire Fighting Equipments',

                    'Hazardous Material Handling Equipments',

                    'Safety Equipments & Clothing',

                    'Security & Guard Services',

                    'Security Equipments & Systems- Indl',

                    'Surveillance Systems & Equipments- Indl',

                    'Cotton Products',

                    'Exporters- Textile & Leather',

                    'Fabric',

                    'Fiber & Fiber Products',

                    'Apparel, Accessories & Make-up',

                    'Art & Craft',

                    'Card Designers, Printers & Suppliers',

                    'Catering Services',

                    'Decorators & Event Supplies',

                    'Display & Audio Systems',

                    'Entertainers',

                    'Event Planners & Organizers',

                    'Fabricators & Erectors',

                    'Halls, Auditorium & Other Venues',

                    'Lightings',

                    'Musical Instruments',

                    'Performing Arts',

                    'Photography',

                    'Special Entertainment Services',

                    'Visual Merchandising',

                    'Wedding Services',

                    'Automobile - Research & Resources',

                    'Automobile – Rentals & Pooling',

                    'Automobile Breakdown',

                    'Automobile Fuel & Lubricants',

                    'New Vehicles - Two Wheelers',

                    'New Vehicles – Four Wheelers',

                    'Parking',

                    'Pre- Owned Vehicles - Four Wheelers',

                    'Pre-Owned Vehicles - Passenger, Commercial & Farm',

                    'Pre-Owned Vehicles – Two Wheelers',

                    'Computers- New',

                    'Computers- Used',

                    'Telecom Equipment & Supplies',

                    'Clubs & Resorts',

                    'Eateries',

                    'Entertainment Centres',

                    'Night Life Centres',

                    'Places Of Interest',

                    'Restaurants',

                    'Tobacco & Accessories',

                    'Air Conditioning & Cooling',

                    'Audio & Video Accessories',

                    'Consumer Electricals & Electronics',

                    'Fan Powered Device',

                    'Home Entertainment',

                    'Kitchen Appliances- Electric',

                    'Lights & Fixtures',

                    'Photography Equipment & Accessories',

                    'Carpets & Rugs',

                    'Ergonomic & Health Furniture & Furnishings',

                    'Furniture (Specialization By Materials)',

                    'Furniture Rentals',

                    'Furniture Services',

                    'Furniture Specialty & Customized',

                    'Furniture Stores & dealers',

                    'Home Furnishings',

                    'Home Furniture',

                    'Mattresses & Pillows',

                    'Office Furnishings',

                    'Office Furniture',

                    'Storage Systems',

                    'Beauty & Hair Centers',

                    'Beauty & Hair Products',

                    'Bridal Make-Up',

                    'Chemist',

                    'Corrective Treatments',

                    'Dental Care',

                    'Fitness Centres & Services',

                    'Health Care Professionals',

                    'Medical Services',

                    'Nursing & Personal Care Facilities',

                    'Organ Donation & Tissue Banks',

                    'Spas',

                    'Beverages',

                    'Crockery & Cutlery',

                    'Food Supplies Household',

                    'Health Food',

                    'Home Decor Supplies',

                    'Kitchen Equipment & Supplies',

                    'Nurseries - Plants',

                    'Prayer Room Supplies',

                    'Safety & Security',

                    'Toiletries',

                    'Water Suppliers, Treatment & Purification',

                    'Contractors',

                    'Domestic Services',

                    'Baby Products',

                    'Boutiques & Tailors',

                    'Childrens Wear',

                    'Flowers',

                    'Footwear',

                    'Home Shopping',

                    'Infant & Kids Wear',

                    'Jewellery & Gems',

                    'Leather Goods',

                    'Life Style Accessories',

                    'Luggage & Bags',

                    'Mens Wear',

                    'Stationery',

                    'Supermarkets /Malls/High Streets',

                    'Watches & Time-Pieces',

                    'Weather Protection Accessories',

                    'Womens Wear',

                    'Consumer Helpline',

                    'Public Utility Services',

                    'Rehabilitation Services',

                    'Religious Places & Services',

                    'Social & Civic Services',

                    'Social Voluntary Organizations',

                    'Air Travel- Chartered',

                    'Hotels & Accommodation',

                    'Road Travel',

                    'Sea Travel',

                    'Ticketing',

                    'Tourism Services',

                    'Tourist Needs & Services',

                    'Travel & Tourism- Domestic',

                    'Travel & Tourism- International',



            );

            return $cats;

        }



        public function subCategories(){

            $subCats=array(

                'Air Conditioners- Automotive',

                    'Air Conditioners- Cassette',

                    'Air Conditioners- Multi Range',

                    'Air Conditioners- Split',

                    'Air Conditioners- Window',

                    'Air Conditioning- Central Plant',

                    'HVAC(Heating Ventilating Air Conditioning)',

                    'Air Conditioners- Renting & Leasing',

                    'Cold Room- Renting & Leasing',

                    'Cold Storage- Renting & Leasing',

                    'Compressors- Renting & Leasing',

                    'Cooling Cabinets- Renting & Leasing',

                    'Cooling Towers- Renting & Leasing',

                    'Ice Cream Cabinet/Vehicles- Renting & Leasing',

                    'Refrigerated Vehicles',

                    'Refrigerators & Freezers- Renting & Leasing',

                    'Water Coolers- Rental',

                    'Air Curtains & Screens',

                    'Air Diffusers- Ventilation',

                    'Air Dryers',

                    'Cooling Systems',

                    'Cooling Towers',

                    'Exhaust Systems',

                    'Filters',

                    'Heat Exchangers',

                    'Heaters',

                    'Ice Making Machines',

                    'Refrigeration Equipments- Multi Range',

                    'Refrigeration Gases',

                    'Temperature Control Systems',

                    'Thermal Storage Equipments(Air Conditioning)',

                    'Water Coolers',

                    'Chilling Plants',

                    'Cold Rooms',

                    'Cold Storage',

                    'Cooling Cabinets',

                    'Dry Ice',

                    'Freezers',

                    'Ice Cream Cabinets',

                    'Ice Cubes & Blocks',

                    'Announcement Systems',

                    'Audio Processors',

                    'Audio Receivers',

                    'Public Address Systems',

                    'Sound Control Panels',

                    'Television Services',

                    'Computer Audio Output Devices',

                    'Projectors- Video Equipments',

                    'Computer Security Alarm Systems',

                    'Cameras- Single/Multi',

                    'Cinematographic Cameras & Accessories',

                    'Video Equipments',

                    'Audio Amplifiers',

                    'Equalizers & Balancers',

                    'Laser Screens',

                    'Speakers',

                    'Theatre & Stage Lighting Equipments',

                    'Wireless Communication Equipments',

                    'Cable Television Broadcasting Equipments',

                    'Choreographers',

                    'Concert Bureaus',

                    'Consultants- Audio-Visual',

                    'DVD/CD Duplication/Media Production Professionals',

                    'Film Makers',

                    'Music Arrangers & Recorders',

                    'Goldsmiths',

                    'Silversmiths',

                    'Gemologists',

                    'Clean Room Lightings',

                    'Dark Room Lightings',

                    'Electric Discharge Bulbs(Vapour Lamp)',

                    'Emergency Lights- Indl',

                    'Festoon Lamps',

                    'Fluorescent Lamps',

                    'Gas Lighting Systems',

                    'Incandescent Light Bulbs',

                    'Landscape Lighting',

                    'LED(Light Emitting Diodes)',

                    'Light Poles',

                    'Sealed Beam Lamps',

                    'Transformers',

                    'UPS(Uninterrupted Power Supply)',

                    'Voltage Stabilizers',

                    'Air Exhaust System',

                    'Air Purifiers',

                    'Floor Cleaning Equipments',

                    'Washing Machines, Dryers & Ironers',

                    'Window Cleaning Equipments',

                    'Bacteriologists',

                    'Air Pollution Control Service',

                    'Water Pollution Control Services',

                    'Biofuel',

                    'Fuel Saving Devices',

                    'Solar Heating Equipment',

                    'Osmosis',

                    'RO(Reverse Osmosis)',

                    'UV(Ultraviolet) Water Treatment',

                    'Water Distillation',

                    'Water Softeners',

                    'Bakery Presses',

                    'Bread Making Equipments',

                    'Cake & Pastry Making Equipments',

                    'Dough Rolling & Mixing Machines',

                    'Industrial Ovens',

                    'Kneaders',

                    'Moulds & Molding Equipments',

                    'Tandoors',

                    'Tortilla Making Machines',

                    'Bar Faucets',

                    'Bar Sinks',

                    'Bar Trays',

                    'Bottle Openers',

                    'Bottle Pourers',

                    'Cocktail Making Equipments',

                    'Decanters',

                    'Drink Stirrers',

                    'Glass Chillers',

                    'Ice Buckets',

                    'Liquor Cabinets',

                    'Straws- Drinking',

                    'Swizzle Sticks',

                    'Wine Accessories',

                    'Beverage Distilleries',

                    'Coffee Processing Ancillary Units',

                    'Fruit Juice Processing Ancillary Units',

                    'Milk Pasteurization',

                    'Soft Drink Bottling Services',

                    'Tea Processing Ancillary Units',

                    'Bottles & Cans Dispensers',

                    'Cup Dispensers',

                    'Pre-Mixes- Tea & Coffee',

                    'Vending Machines- Carbonated & Non-Carbonated',

                    'Vending Machines- Coffee & Tea',

                    'Vending Machines- Ice Creamv',

                    'Vending Machines- Milk',

                    'Vending Machines- Wine',

                    'Water Dispensers',

                    'Beverage Blanchers',

                    'Beverage Filters',

                    'Brewing Equipments',

                    'Brine Makers',

                    'Coffee Grinders',

                    'Coffee Roasters',

                    'Fermentation Equipments',

                    'Freezers',

                    'Juice Extractors',

                    'Milk Analyzer',

                    'Mineral Water Plants',

                    'Pasteurizers',

                    'Candy Making Machines',

                    'Chewing Gum Manufacturing Machines',

                    'Chocolate Making Machines & Equipments',

                    'Confectioners & Dough Scales',

                    'Confectioners Coolers',

                    'Confectionery Molding Machines',

                    'Cream Candy Machines',

                    'Sugar Coating Machines',

                    'Vacuum Cooker',

                    'Beverage Bases',

                    'Coconut Gel',

                    'Flavouring Essence',

                    'Food Dyes',

                    'Food Preservatives',

                    'Food Stabilizers',

                    'Gelatins',

                    'Glycerol',

                    'Guar Gum(Thickeners)',

                    'Meat Tenderizers(Ingredient)',

                    'Oleoresins',

                    'Peptic Extracts',

                    'Rennin',

                    'Curing Plants- Food Processing',

                    'Drying Machines- Food Processing',

                    'Extruding & Inflating Machines- Food',

                    'Filtering Systems- Food Processing',

                    'Flour Mill Machinery & Equipment',

                    'Food Processor- Indl',

                    'Food Shakers',

                    'Food Shredders/Slicer/Dicers/Graters/Peelers',

                    'Food Smoking & Steaming Machinery',

                    'Fryers',

                    'Ice Cream Making Machines',

                    'Ice Making Machines',

                    'Industrial Cheese Cutters & Shredders',

                    'Maple Sap Gathering Equipments',

                    'Nut Cracking Machines',

                    'Pasta Making Machines',

                    'Roasting Machines',

                    'Flavouring Machines',

                    'Noodles & Vermicelli Production Lines',

                    'Potato Chips Production Lines',

                    'Puff Snack Production Lines',

                    'Chafing Dishes',

                    'Cocktail Picks',

                    'Crockery',

                    'Cutlery',

                    'Glassware',

                    'Parasol Picks(Barware)',

                    'Plate Warmers',

                    'Serving Trays',

                    'Chinese Food Products Suppliers',

                    'Chocolate & Confectionery Suppliers',

                    'Coconut & Coconut Products',

                    'Dairy Products Suppliers',

                    'Dry Fruits & Nuts Suppliers',

                    'Fresh Produce(Fruits & Vegetables) Suppliers',

                    'Frozen Food Suppliers',

                    'Gold & Silver Waraq',

                    'Grain Suppliers',

                    'Honey',

                    'Ice Cream & Desserts Suppliers',

                    'Ice Cubes & Blocks',

                    'Italian Pasta Suppliers',

                    'Jam, Squashes, Sauces & Pickles',

                    'Meat & Sea Food Suppliers',

                    'Mouth Fresheners',

                    'Salts, Spices & Condiments Suppliers',

                    'Sweeteners',

                    'Coconut Scrapers',

                    'Cutting & Processing Machines- Vegetables & Fruits',

                    'Destoners- Fruits & Vegetables',

                    'Dry Fruits & Nuts Processing Plants',

                    'Fruit & Vegetable Brushes',

                    'Fruit & Vegetable Dryers',

                    'Fruit & Vegetable Peelers',

                    'Fruit Blanching Plants',

                    'Fruit Presses- Indl',

                    'Produce Washing Machines',

                    'Broilers(Appliances)',

                    'Can Openers',

                    'Chimneys & Hoods',

                    'Commercial Microwave Ovens',

                    'Cooking Ranges- Commercial',

                    'Cooking Utensils- Commercial',

                    'Dip Type Sterilizer',

                    'Dishwashers- Commercial',

                    'Food & Beverage Refrigeration Equipments',

                    'Food Conveyor Systems',

                    'Food Service Containers',

                    'Food Wrap Dispensers',

                    'Fryers',

                    'Garbage Disposals- Commercial',

                    'Glass Chillers',

                    'Indoor Cooking Grills',

                    'Kitchen Furniture & Fixtures',

                    'Knives & Choppers',

                    'Pizza Preparation Unit',

                    'Popcorn Machines',

                    'Sandwich Makers',

                    'Syrup Pumps',

                    'Weighing Scales- Kitchen Equipments',

                    'Bacon Presses',

                    'Deboning Machines',

                    'Fish Processing Equipments',

                    'Meat Grinders/Mincers',

                    'Meat Hooks',

                    'Meat Processing Equipments- Multi Range',

                    'Poultry Plucking Machines',

                    'Sausage Stuffing Machines',

                    'Candles & Candle Stands',

                    'Display Counters',

                    'Menu Brochures',

                    'Menu Stands & Folders',

                    'Sign Boards',

                    'Table Covers',

                    'Toothpick Dispensers',

                    'Fireplaces',

                    'Furnaces',

                    'Heat Converters',

                    'Heat Transfer Equipments',

                    'Heaters- Air',

                    'Heaters- Electric',

                    'Heaters- Gas',

                    'Heaters- Multi Range',

                    'Heaters- Oil Burning',

                    'Heaters- Wall',

                    'Heaters- Water',

                    'Heating Elements',

                    'Induction Heating Equipments',

                    'Welding Equipments & Supplies',

                    'Dry Cleaning Machines',

                    'Laundromats',

                    'Laundry Ironing Machines & Presses',

                    'Washing Machines, Dryers & Ironers',

                    'Fruit Stones & Kernels',

                    'Horticulture Supplies',

                    'Dairy Farms',

                    'Poultry',

                    'Fish & Fish By-Products',

                    'Poultry/Hatchery Equipments',

                    'Coffee Processing Machines',

                    'Dairy Processing Machines & Supplies',

                    'Tea Processing Machines',

                    'Mild Steel & Mild Steel Products',

                    'Nickel Steel & Nickel Steel Products',

                    'Stainless Steel & Stainless Steel Products',

                    'Steel & Steel Products',

                    'Gemstones',

                    'Gold',

                    'Silver',

                    'Stainless Steel Sheet Products',

                    'Bags- Paper',

                    'Bags- Plastic',

                    'Bags- Speciality',

                    'Pouches & Sachets',

                    'Cans & Jars',

                    'Cartons & Boxes',

                    'Containers- Food',

                    'Bottles- Aluminium',

                    'Bottles- Earthenware',

                    'Bottles- Glass',

                    'Bottles- PET',

                    'Bottles- Plastic',

                    'Bottles- Polycarbonate',

                    'Cap Closures',

                    'Corks & Rubber Stoppers',

                    'Food Packaging Machines',

                    'Packaging Machines- Multi Range',

                    'Foil & Foil Products',

                    'Garment Packaging Accessories',

                    'Food Packaging Services',

                    'Packaging & Labeling Services',

                    'Packing Services- Multiple',

                    'Textile Folding & Packing Services',

                    'Thermoforming Packaging Services',

                    'Fans- Hand, Paper, Etc',

                    'Fire Control Panels- Indl',

                    'Fire Curtains- Indl',

                    'Fire Escaping, Fall Protection & Access Equipments- Indl',

                    'Fire Extinguishers- Indl',

                    'Fire Protection System Design & Installation',

                    'Fire Protection- Water Storage Systems',

                    'Firefighting Equipments- Indl',

                    'Hydrant Systems- Indl',

                    'Sprinkler Systems- Indl',

                    'Asbestos Encapsulants',

                    'Asbestos Removal Glove Bags',

                    'Bench Cans',

                    'Detectors- Lead',

                    'Detectors- Radiation',

                    'Detectors- Radon',

                    'Drum-Top Funnels',

                    'Fuel Storage Tanks',

                    'Arms & Ammunitions',

                    'Bullet Resistant Glass',

                    'Bursting Discs',

                    'Emergency Ladders & Lifelines',

                    'Gas Detectors',

                    'Hazard Safety Devices',

                    'Sand Bags',

                    'Self Defense Sprays',

                    'Alarm Installation- Indl',

                    'Armed Security Guards- Indl',

                    'Burglar & Fire Alarm Monitoring Services',

                    'Dog Guarding- Indl',

                    'Guards- Indl',

                    'Alarm Systems- Indl',

                    'Central Monitoring Control Systems- Indl',

                    'Controller Consoles- Indl',

                    'Security Lighting- Indl',

                    'Sensors- Security',

                    'Sirens & Hooters',

                    'Wireless Security Systems',

                    'Anomaly Detectors',

                    'Ballistic Protection Products',

                    'CCTV(Closed-Circuit Television)',

                    'Detectors- Heat',

                    'Detectors- Infrared',

                    'Detectors- Metal',

                    'Encryption Devices',

                    'Radio Frequency Identification Systems(RFID)',

                    'Cotton Fabrics',

                    'Buying House',

                    'Exporters- Fabric',

                    'Exporters- Garments',

                    'Exporters- Handloom',

                    'Exporters- Hosiery',

                    'Exporters- Leather & Leather Products',

                    'Exporters- Yarn',

                    'Buckram Fabric',

                    'Canvas Fabric',

                    'Cashmere Fabric',

                    'Chenille Fabric',

                    'Chiffon Fabric',

                    'Corduroys Fabric',

                    'Crepe Fabric',

                    'Denim Fabric',

                    'Embroidered Fabric',

                    'Fabric- Multi Range',

                    'Flannel Fabric',

                    'Hosiery',

                    'Khadi Fabric',

                    'Knitted Fabric',

                    'Linen Fabric',

                    'Mohair Fabric',

                    'Muslin, Swiss Muslin Fabric',

                    'Non-Woven Fabric',

                    'Nylon Fabric',

                    'Plaid Fabric',

                    'Polyester Fabric',

                    'Poplin Fabric',

                    'Rayon Fabric',

                    'Rexine Fabric',

                    'Sateen Fabric',

                    'Satin Fabric',

                    'Silk Fabric',

                    'Stitch Bonded Fabric',

                    'Stretch Fabric',

                    'Synthetic & Blended Fabric',

                    'Technical Textiles',

                    'Velvets & Velveteens',

                    'Jute Fibers & Products',

                    'Natural(Jute, Cotton, Silk) Fibers',

                    'Synthetic(Polyester, Nylon, Viscous)',

                    'Fancy Dress & Costumes',

                    'Groom Salons',

                    'Grooming Consultants',

                    'Henna Artists',

                    'Jewellery',

                    'Make-Up Artist- Stage',

                    'Performing Artist Costumes',

                    'Religious Apparel',

                    'Antiques',

                    'Art & Craft Material & Supplies',

                    'Art Metal Work',

                    'Art Needlework',

                    'Art Painters',

                    'Art Restoration',

                    'Bamboo Artefacts',

                    'Bells & Gongs',

                    'Calligraphers',

                    'Clay & Terracotta Products',

                    'Curios',

                    'Decorative Items',

                    'Decorative Items',

                    'Emporiums',

                    'Fine Artists',

                    'Hand Painting',

                    'Handicrafts',

                    'Murals',

                    'Picture Framing & Laminating',

                    'Sculptor',

                    'Silver Articles',

                    'Stone Carvings',

                    'Wall Hangings',

                    'Wood Carvings',

                    'Invitation Card Suppliers',

                    'Canteen Contractors & Services',

                    'Carrier Meal Service',

                    'Event Caterers',

                    'Crackers',

                    'Event Decorative Items',

                    'Florists',

                    'Tents/Pandals',

                    'Theme Decorators',

                    'Display Stands',

                    'Electronic & LED Display Systems',

                    'Projectors',

                    'Public Address system',

                    'Anchors & Presenters- Events',

                    'Band Houses',

                    'DJs',

                    'Fire Work Professionals',

                    'Joy Ride Providers',

                    'Live Bands',

                    'Magicians',

                    'Orchestra Bands',

                    'Shehnai Players',

                    'Concert Organizers',

                    'Conference Organizers',

                    'Event Co-Coordinators- Corporate',

                    'Event Managers',

                    'Furniture Arrangement',

                    'Stage Set-Up',

                    'Stall Installations',

                    'Auditorium',

                    'Ballrooms',

                    'Banquet Halls',

                    'Community Halls',

                    'Temples',

                    'Flash Lights',

                    'Laser Lights',

                    'Moving Head Lights',

                    'Par Lights',

                    'Scanner Lights',

                    'Sky Tracers',

                    'Keyboard Instruments',

                    'Musical Instruments- Multi Range',

                    'Wind Instruments',

                    'Acrobatic Artists',

                    'Actors',

                    'Balloon Arts',

                    'Circus Arts',

                    'Clowns & Jokers',

                    'Dance Troupes',

                    'Jugglers',

                    'Magicians',

                    'Mumming Artists',

                    'Opera Performers',

                    'Puppetry',

                    'Stagecraft',

                    'Storytelling',

                    'Street Performers',

                    'Digital Photography',

                    'Documentary Photography',

                    'Fashion Photography',

                    'Glamour Photography',

                    'Industrial Photography',

                    'Nature Photography',

                    'Photography Labs',

                    'Photography Studios',

                    'Product Photography',

                    'Still Photography',

                    'Video Photography',

                    'Lottery',

                    'Lotto(Bingo)',

                    'Sculptor',

                    'Tattooing',

                    'Display Frames & Stands',

                    'Display Racks & Counters',

                    'Mannequins & Accessories',

                    'Astrologers',

                    'Priests',

                    'Automobile Consultants',

                    'Agricultural Vehicles- Rental',

                    'Automobile Pooling Information Service',

                    'Commercial Vehicles- Rental',

                    'Four Wheelers- Rental & Pooling',

                    'Three Wheelers- Rental & Pooling',

                    'Two Wheelers- Rental',

                    'Water Vehicles- Chartered',

                    'Automobile Breakdown Road Service',

                    'Automobile Helplines',

                    'Car Pullers',

                    'CNG Filling Stations',

                    'Fuel Stations',

                    'LPG Filling Stations',

                    'Bicycles & Motorized Bicycles- New',

                    'Electric Scooters & Bikes',

                    'Mopeds- New',

                    'Motor Cycles- New',

                    'Scooters- New',

                    'Cars- New',

                    'Carts-Motorized- New',

                    'Jeeps- New',

                    'SUVs- New',

                    'Parking Stations & Garages',

                    'Cars- Pre-Owned',

                    'Electric Cars- Pre-Owned',

                    'Jeeps- Pre-Owned',

                    'Motorized Carts- Pre-Owned',

                    'SUVs- Pre-Owned',

                    'Passenger Vehicles- Pre-Owned',

                    'Rickshaws- Pre-Owned',

                    'Three Wheelers- Pre-Owned',

                    'Tractors- Pre-Owned',

                    'Trailers- Pre-Owned',

                    'Trucks- Pre-Owned',

                    'Bicycles & Motorized Bicycles- Pre-Owned',

                    'Mopeds- Pre-Owned',

                    'Motor Cycles- Pre-Owned',

                    'Scooters- Pre-Owned',

                    'Computer Retail Outlets- New',

                    'Computer Servers- New',

                    'Desktops- New',

                    'Laptops- New',

                    'Palmtops- New',

                    'Computer Servers- Used',

                    'Desktops- Used',

                    'Laptops- Used',

                    'Palmtops- Used',

                    'Cell Phones & Accessories',

                    'Mobile Phone Detectors',

                    'Mobile Phone Enhancers',

                    'Mobile Phone Jammers',

                    'Beach Resorts',

                    'Hotels',

                    'Motels',

                    'Tree Top Resorts',

                    'Water Parks',

                    'Bakery & Cake Shops',

                    'Bars',

                    'Chaat Shops',

                    'Chocolates & Confectionary Shops',

                    'Coffee Shops/Cafes',

                    'Dessert Shops',

                    'Fast Food Joints',

                    'Ice-Cream Parlor',

                    'Pan Shops',

                    'Pizza Outlets',

                    'Restaurants',

                    'Salad Bars',

                    'Sweets & Savouries',

                    'Amphitheatres',

                    'Amusement Park',

                    'Animal Rides',

                    'Bathing Beaches',

                    'Bowling Alley',

                    'Circus',

                    'Joy Ride Parks',

                    'Joy Rides & Gaming Centre',

                    'Multiplex',

                    'Stadiums',

                    'Stadiums',

                    'Supermarkets /Malls/High Streets',

                    'Theatres',

                    'Water Parks',

                    'Casinos',

                    'Cocktail Lounges',

                    'Discotheques',

                    'Jig Clubs',

                    'Karaoke Lounge',

                    'Pubs & Bars',

                    'Aquarium- Museums',

                    'Art Galleries',

                    'Botanical Gardens',

                    'Historical Places',

                    'Museums',

                    'Zoo',

                    'Restaurants- Andhra',

                    'Restaurants- Bengali',

                    'Restaurants- Buffet',

                    'Restaurants- Chinese',

                    'Restaurants- Continental',

                    'Restaurants- Gujarati',

                    'Restaurants- Italian',

                    'Restaurants- Japanese',

                    'Restaurants- Kashmiri',

                    'Restaurants- Kerala',

                    'Restaurants- Malaysian',

                    'Restaurants- Mexican',

                    'Restaurants- Mughlai',

                    'Restaurants- Multi Cuisine',

                    'Restaurants- Non-Vegetarian',

                    'Restaurants- North Indian',

                    'Restaurants- Punjabi',

                    'Restaurants- Rajasthani',

                    'Restaurants- Seafood',

                    'Restaurants- South Indian',

                    'Restaurants- Tandoori',

                    'Restaurants- Thai',

                    'Restaurants- Vegetarian',

                    'Restro Bars',

                    'Revolving Restaurants',

                    'Beedis',

                    'Cigarettes',

                    'Cigars',

                    'Pan Masala & Gutka',

                    'Sheesha & Sheesha Accessories',

                    'Snuff',

                    'Air Conditioners',

                    'Air Conditioners- Rental',

                    'Air Coolers',

                    'Central Air-Conditioning Units',

                    'Cooling Fans',

                    'Audio & Video Jacks',

                    'Electrical & Electronics Stores',

                    'Electrical Equipments- Multi Range',

                    'Emergency Lights- Res & Com',

                    'Fans- Electrical',

                    'Fitness Equipments',

                    'Geysers- Gas/Electrical',

                    'Lights, Bulbs & Tubes',

                    'Press Irons',

                    'Refrigerators & Freezers',

                    'Remote Controls',

                    'Sewing Machines',

                    'Switches, Sockets & Plugs',

                    'Transformers',

                    'Vacuum Cleaners',

                    'Washing Machines & Dryers',

                    'Air Ventilators',

                    'Exhaust Fans',

                    'Hand Dryers',

                    'CD, VCD, DVD Players',

                    'DTH TV',

                    'Equalizers',

                    'Home Entertainment Speakers',

                    'Home Theater',

                    'Jukeboxes',

                    'Karaoke Machines',

                    'Mini Disc Recorder/Players',

                    'MP3 Players',

                    'Phonograph',

                    'Portable CD/Cassette Players',

                    'Portable Players',

                    'Radios',

                    'Satellite Radio Receivers',

                    'Satellite Radio Tuners',

                    'Sound Amplifiers/Preamplifiers',

                    'Stereo Systems',

                    'Tape Decks',

                    'Television Sets- Black & White',

                    'Television Sets- Color',

                    'Televisions- LCD/Plasma',

                    'Televisions- Portable',

                    'Dishwashers',

                    'Electric Chimneys',

                    'Electric Cookers',

                    'Electric Grill',

                    'Electric Ovens(OTG)',

                    'Electric Stoves/Hot Plates',

                    'Exhaust Fans',

                    'Flour Grinders & Mills',

                    'Food Processors',

                    'Food Waste Disposal Equipments',

                    'Grinders & Mixers',

                    'Microwaves',

                    'Snack Makers',

                    'Soda Makers',

                    'Tea & Coffee Making Machines',

                    'Toasters',

                    'Bulb Holders',

                    'Chandeliers',

                    'Electric Fountains',

                    'Lamp Shades',

                    'LED Lightings, Lamps & Lanterns',

                    'Multi Range- Lights & Fixtures',

                    'Tube Light Fixtures',

                    'Camcorders',

                    'Digital Cameras',

                    'Digital Video Recorders',

                    'Slide Projectors',

                    'Still Cameras',

                    'Video Cameras',

                    'Carpets',

                    'Rugs',

                    'Wall To Wall Carpets',

                    'Ergonomic Chairs',

                    'Ergonomic Cushions',

                    'Ergonomic Mattresses',

                    'Ergonomic Pillows',

                    'Ergonomic Tables',

                    'Foot Massagers',

                    'Massage Chairs',

                    'Massage Cushions',

                    'Ceramic & Marble Furniture',

                    'Furniture- Cane & Wicker',

                    'Furniture- Compressed Membrane',

                    'Furniture- Glass',

                    'Furniture- Leather',

                    'Furniture- Plastic Moulded',

                    'Furniture- Steel',

                    'Furniture- Wooden',

                    'Furniture- Wrought Iron',

                    'Event & Occasion Furniture- Rental',

                    'Office & Conference Furniture- Rental',

                    'Furniture Cleaning',

                    'Furniture Frames',

                    'Furniture Painting',

                    'Furniture Polishing',

                    'Furniture Refinishing',

                    'Furniture Restoration',

                    'Beauty Salon Furniture',

                    'Furniture- Turnkey Project Contractors',

                    'Garden Furniture',

                    'Hall & Banquet Furniture',

                    'Hotel & Restaurant Furniture',

                    'Shopping & Luggage Trolleys',

                    'Furniture Stores- Multi Range',

                    'Imported Furniture Stores',

                    'Modular Furniture Stores',

                    'Prefabricated Furniture Stores',

                    'Unfinished Furniture Stores',

                    'Bed Spreads',

                    'Blinds & Shades',

                    'Carpets & Rugs',

                    'Curtains, Draperies & Rods',

                    'Home Furnishing Stores',

                    'Mats & Matting',

                    'Napkins & Napkin Holders',

                    'Quilts & Blankets',

                    'Shower Curtains',

                    'Tapestry',

                    'Upholstery',

                    'Bar Units',

                    'Bean Bag Furniture',

                    'Beds',

                    'Chair & Seaters',

                    'Childrens Room Furniture',

                    'Consoles',

                    'Cots',

                    'Dining Table Sets',

                    'Dressing Tables',

                    'Futons',

                    'Garden Furniture',

                    'Sofa Cum Beds',

                    'Sofa Sets',

                    'Television & Air Conditioner Stands',

                    'Wardrobes',

                    'Water Beds',

                    'Wooden Screens',

                    'Bedding',

                    'Futons Mattresses',

                    'Mattresses',

                    'Pillows',

                    'Water Mattresses',

                    'Carpets & Rugs',

                    'Coasters',

                    'Curtains & Draperies',

                    'Tapestry',

                    'Venetian Blinds',

                    'Audio-Visual Furniture',

                    'Computer Furniture',

                    'Conference Tables',

                    'File Cabinets',

                    'Furniture- Custom Made',

                    'Modular Furniture',

                    'Office Chairs',

                    'Office Furniture- Multi Range',

                    'Office Panels',

                    'Office Partitions',

                    'Reception Desks & Seating',

                    'Tables & Desks',

                    'Work Stations',

                    'Cabinets',

                    'Customized Storage System',

                    'Racks- Slotted Angle, Wooden Etc',

                    'Storage Chests',

                    'Wardrobes',

                    'Beauty Parlors & Salons- Mens',

                    'Beauty Parlors & Salons- Unisex',

                    'Beauty Parlors & Salons- Womens',

                    'Body Piercing Centres',

                    'Nail Art Centres',

                    'Spas',

                    'Tattoo Making Parlors',

                    'Cosmetics- Multi Range',

                    'Eye Products',

                    'Face Products',

                    'Hair Care Products',

                    'Lip Products',

                    'Nail Products',

                    'Skin Products',

                    'Bridal Make-Up Packages',

                    'Grooms Packages',

                    'Pre Bridal Packages',

                    'Chemist- 24 Hrs',

                    'Chemist- Day Time',

                    'Homeopathic Pharmacy',

                    'Speciality Medicines',

                    'Beauty Treatment',

                    'Botox Treatment',

                    'Cosmetic Surgery',

                    'Cryo Surgery(Skin Conditioning)',

                    'Doctors- Laparoscopic Surgery',

                    'Electrolysis',

                    'Face Lifting',

                    'Hair Treatment',

                    'Laser Treatments',

                    'Liposuctions',

                    'Dental Clinic',

                    'Aerobics Training Centres',

                    'Fitness Trainers & Consultants',

                    'Gymnasium Instructors',

                    'Gymnasiums/Health Clubs',

                    'Pilates Training Centres',

                    'Spas',

                    'Tai Chi Training Centres',

                    'Yoga Training Centres',

                    'Dieticians',

                    'Nutritionist',

                    'Ambulance Service',

                    'Emergency Oxygen Services',

                    'Home Health Care Facility',

                    'Blood Banks',

                    'Body Spa',

                    'Day Spa',

                    'Foot Spa',

                    'Hair Spa',

                    'Jacuzzi',

                    'Multiple Spa',

                    'Nail Spa',

                    'Spa Resorts',

                    'Aerated Water',

                    'Appetizers',

                    'Coffee',

                    'Energy Drinks',

                    'Fruit & Vegetable Juices',

                    'Fruit Shakes & Mocktails',

                    'Mineral Water',

                    'Soft Drinks',

                    'Summer Drinks',

                    'Tea',

                    'Whisky',

                    'Wine',

                    'Cookware Crockery',

                    'Crockery & Cutlery- Brassware',

                    'Crockery & Cutlery- Ceramic Ware',

                    'Crockery & Cutlery- Chinaware',

                    'Crockery & Cutlery- Melmoware',

                    'Crockery & Cutlery- Plasticware',

                    'Crockery & Cutlery- Porcelain Ware',

                    'Crockery & Cutlery- Stoneware',

                    'Crockery & Cutlery- Woodware',

                    'Crockery- Crystal Ware',

                    'Crockery- Enameled',

                    'Crockery- Glassware',

                    'Stainless Steel Utensils',

                    'Thermoware',

                    'Confectionery & Bakery Products',

                    'Dairy Products',

                    'Dry Fruits & Nuts',

                    'Fruit & Vegetable Shops',

                    'Groceries & Provisions',

                    'Health Drinks',

                    'Nutritional Supplements',

                    'Sugar Free Food',

                    'Sugar Supplements',

                    'Aquariums',

                    'Artificial Flowers & Foliage',

                    'Artificial Flowers, Plants & Trees',

                    'Artificial fountains- Commercial & Public',

                    'Artificial Fountains- Home',

                    'Awnings & Canopies',

                    'Bar Equipment',

                    'Bed Spreads & Curtains',

                    'Candles',

                    'Clocks & Time pieces',

                    'Cushions & Cushion covers',

                    'Fireplace & Mantels',

                    'Furniture & Fittings',

                    'Glass- Decorative, Etched Etc',

                    'Lighting & Fixtures',

                    'Mattresses & Quilts',

                    'Paintings & Wall Hangings',

                    'Potteries',

                    'Rugs & Carpets',

                    'Shelves',

                    'Showpieces & Artifacts',

                    'Crockery & Cutlery',

                    'Flour grinders',

                    'Food Wrapping Supplies',

                    'Gas & Fuel Supplies',

                    'Gas Stoves & Cooking Ranges',

                    'Kerosene Pressure Stove',

                    'Kitchen Equipment- Multi Range',

                    'Kitchen Storage Racks & Baskets',

                    'Kitchen Tools',

                    'Kitchen Utensils',

                    'Modular Kitchen & Equipment',

                    'Plastic Products- Multi Range',

                    'Pressure Cookers',

                    'Steam Cookers',

                    'Tabletop Ware',

                    'Water Coolers',

                    'Water Purifiers',

                    'Weighing Scales',

                    'Indoor Plants',

                    'Ornamental Plants',

                    'Outdoor Plants',

                    'Plants- Rental',

                    'Flower Suppliers',

                    'Incense & Prayer Accessories',

                    'Religious Books',

                    'Religious Pictures & Frames',

                    'Statues, Idols & Mandap',

                    'Fire fighting Equipment',

                    'Security Alarms & Sirens',

                    'Air Fresheners',

                    'Body Lotions',

                    'Hand Wash Soaps & Disinfectants',

                    'Perfumes & Deodorants',

                    'Sanitary Napkins',

                    'Scrubs & Packs',

                    'Shampoos & Conditioners',

                    'Shaving Kits',

                    'Shower Gels',

                    'Shower Liquid Soaps',

                    'Skin Brushes & Scrubbers',

                    'Soaps & Face Wash',

                    'Sunscreen Lotions',

                    'Talcum Powder',

                    'Toilet Rolls & Tissue Papers',

                    'Toiletries Stores',

                    'Toothbrush',

                    'Toothpaste & Mouthwash',

                    'Water Suppliers',

                    'Air Conditioning Contractors',

                    'Interior Decorator & Contractors',

                    'Painting Contractors',

                    'Flour & Rice Mills',

                    'Groceries, Toiletries Suppliers & Services',

                    'Healthcare Services',

                    'Junk Dealers',

                    'Taxi / Cab Service',

                    'Vastu Services',

                    'Baby Beddings',

                    'Baby Care Products',

                    'Baby Carriages & Strollers',

                    'Baby Cots',

                    'Baby Diners & Chairs',

                    'Baby Feeding Products',

                    'Baby Jumpers & Bouncers',

                    'Baby Mosquito Net',

                    'Baby Products- Multi Range',

                    'Baby Toilet Seats & Bath Tubs',

                    'Baby Toys',

                    'Baby Toys',

                    'Prams',

                    'Sterilizing Machines- Baby Feeders',

                    'Boutiques- Ladies',

                    'Embroidery- Hand & Machine',

                    'Fabric- Ladies Wear',

                    'Suitings & Shirtings',

                    'Tailors- Gents',

                    'Casual Wear- Childrens',

                    'Childrens Sports Wear',

                    'Childrens Wear- Multi Range',

                    'Innerwear-Childrens',

                    'Lehngas & Salwar Suits- Childrens',

                    'Night Suits- Childrens',

                    'Party Wear- Childrens',

                    'School Uniforms',

                    'Winter Wear- Childrens',

                    'Artificial Flowers, Plants & Trees',

                    'Florist',

                    'Flower Arrangements- Special',

                    'Flower Suppliers- Bulk',

                    'Footwear- Gents',

                    'Footwear- Ladies',

                    'Footwear- Multi Range',

                    'Footwear-Childrens',

                    'Footwear-Kids',

                    'Gumboots',

                    'Orthopedic Shoes',

                    'E-Commerce',

                    'Teleshopping',

                    'Creepers- Infant & Kids',

                    'Infant & Kids Wear- Multi Range',

                    'Innerwear- Infant & Kids',

                    'Mittens- Infant & Kids',

                    'Rompers',

                    'Socks- Infant & Kids',

                    'Suits- Infants',

                    'Artificial Jewellery',

                    'Costume Jewellery',

                    'Crystal Jewellery',

                    'Designer Jewellery',

                    'Diamond Jewellery',

                    'Gems & Stones',

                    'Gold Jewellery',

                    'Jewellery- Multi Range',

                    'Kundan Jewellery',

                    'Pearl Jewellery',

                    'Platinum Jewellery',

                    'Semi Precious Jewellery',

                    'Silver Jewellery',

                    'Leather Accessories',

                    'Leather Bags',

                    'Leather Fashion Jewellery',

                    'Leather Furniture',

                    'Leather Garments & Clothing',

                    'Leather Goods- Multi Range',

                    'Appliances Accessories',

                    'Automobiles Accessories',

                    'Badges & Emblems',

                    'Bags, Handbags & Luggage',

                    'Bangles',

                    'Beach Accessories',

                    'Belts',

                    'Buttons, Laces & Other Fabric Accessories',

                    'Canvas Product Accessories',

                    'Caps & Hats',

                    'Cell Phone Accessories',

                    'Computer Accessories',

                    'Cufflinks & Tie pins',

                    'Fashion Accessories',

                    'Furniture Accessories',

                    'Hair Accessories',

                    'Lifestyle Accessories- Multi Range',

                    'Optical  Accessories',

                    'Wallets',

                    'Bags- School & College',

                    'Executive Bags- Leather & Non-Leather',

                    'Handbags & Clutch Bags',

                    'Jewellery cases & Boxes',

                    'Luggage- Soft & Moulded',

                    'Wallets',

                    'Denims - Mens',

                    'Innerwear- Mens',

                    'Jackets- Mens',

                    'Mens Life Style Accessories',

                    'Mens Suits',

                    'Mens Swimwear',

                    'Mens Track Suits',

                    'Mens Wear- Multi Range',

                    'Nightwear- Mens',

                    'Sherwani',

                    'Shirts- Mens',

                    'Socks- Mens',

                    'Stoles , Safas & Turbans- Mens',

                    'Sweaters- Mens',

                    'T-Shirts- Mens',

                    'Ties- Mens',

                    'Trousers- Mens',

                    'Board Pins & Accessories',

                    'Calculators',

                    'Drawing & Painting Instruments',

                    'Erasers & Correctors',

                    'Inks',

                    'Pencil',

                    'Pens',

                    'Stapler & Pins',

                    'Stationery- Educational',

                    'Stationery- Office',

                    'Book Stores',

                    'Departmental Stores',

                    'Designer Wear Stores',

                    'Dolls & Toys',

                    'Duty Free Shops',

                    'Electrical & Electronics Stores',

                    'Fabric & Clothing Stores',

                    'Gift & Novelty Shops',

                    'Hypermarkets',

                    'Music Stores',

                    'Shopping Malls',

                    'Supermarkets',

                    'Car Watches',

                    'Cuckoo Clocks',

                    'Digital Watches',

                    'Grandfather Clocks',

                    'Tower Clocks',

                    'Wall Clocks & Timepieces',

                    'Watches',

                    'Watches & Clocks- Multi Range',

                    'Watches & Time-Pieces Accessories',

                    'Rain Coat',

                    'Umbrella',

                    'Windcheaters',

                    'Burqa',

                    'Cardigans- Womens',

                    'Casual Wear- Womens',

                    'Coats- Womens',

                    'Jackets- Womens',

                    'Jeans & Capries- Womens',

                    'Kurtis',

                    'Lehngas',

                    'Lingerie',

                    'Nightwear- Womens',

                    'Salwar Kameez',

                    'Sarees',

                    'Shawls- Womens',

                    'Shirts- Womens',

                    'Skirts',

                    'Socks & Stockings- Womens',

                    'Sweaters- Womens',

                    'Ties & Cravats- Womens',

                    'Trousers- Womens',

                    'Womens Life Style Accessories',

                    'Womens Swimwear',

                    'Womens wear Track Suits',

                    'Womens Wear- Multi Range',

                    'Banking & Finance Helplines',

                    'Consumer Electronics Helplines',

                    'Customer Care Centre',

                    'Gas Leakage Helplines',

                    'Hotel Reservation Helplines',

                    'White Goods Helplines',

                    'Ambulance Services',

                    'Blood Banks & Centres',

                    'Central Government Offices',

                    'Courts',

                    'Defence Services',

                    'Electricity Supply Services',

                    'Fire Protection Services',

                    'Local Government Offices',

                    'Municipal Services',

                    'Parks',

                    'Police Protection Services',

                    'Public Transport Services',

                    'Railway Enquiry',

                    'Road Digging Alert',

                    'Sewer Companies',

                    'State Government Offices',

                    'Telephone Enquiry',

                    'Transportation & Public Utilities Law Attorneys',

                    'Utility Contractors',

                    'Water Supplies',

                    'Weather Information Centres',

                    'Eating Disorders Information & Treatment Centre',

                    'Gambling Addiction Treatment Centres',

                    'Religious Books',

                    'Religious Organizations',

                    'Religious Schools',

                    'Temples',

                    'Cultural Organizations',

                    'Womens Protection Forums',

                    'Ambulance Services',

                    'Blood Donation Services',

                    'Helplines',

                    'Rescue Services',

                    'Voluntary Health Services',

                    'Airports',

                    'Chartered Aircrafts',

                    'Chartered Helicopters',

                    'Beach Houses & Cottages',

                    'Bed & Breakfast Hotels',

                    'Boarding Houses',

                    'Dharamsala',

                    'Dormitories',

                    'Guest Houses',

                    'Hostels',

                    'Hotels(Outstation)',

                    'Hotels- Budget',

                    'Hotels- Luxury',

                    'Lodges',

                    'Motels',

                    'Paying Guest Accommodations',

                    'Resorts',

                    'Service Apartments',

                    'Tourists Homes',

                    'Bus Express Service',

                    'Buses- Charter',

                    'Car Hiring Services',

                    'Caravan Services',

                    'Chauffeur Services',

                    'Taxi & Cab Services',

                    'Cruise Liners',

                    'Ships & Boats- Travel',

                    'Yacht Travel',

                    'Ticketing Agencies- Air',

                    'Ticketing Agencies- Bus',

                    'Ticketing Agencies- Cruise Liners',

                    'Ticketing Agencies- Rail',

                    'Ticketing- Online',

                    'Transport Agents',

                    'Transportation Consultants',

                    'Travel Bureaus',

                    'Travel Consultants',

                    'Travel Contractors',

                    'Embassy & Consulate',

                    'Guided Tours/Guides',

                    'Immigration Consultants',

                    'Interpreters & Translators',

                    'Money Changers',

                    'Money Wiring',

                    'Passport Office',

                    'Passport Visa Agents',

                    'Tourist Information Centres',

                    'Tourist Maps',

                    'Travel Insurance',

                    'Travel Portals',

                    'Travel Publications',

                    'Travelogues',

                    'Domestic Tourism- Beach Vacations & Water Sports',

                    'Domestic Tourism- Cultural',

                    'Domestic Tourism- Fairs & Festivals',

                    'Domestic Tourism- Healing & Holistic',

                    'Domestic Tourism- Heritage',

                    'Domestic Tourism- Hill',

                    'Domestic Tourism- Medical',

                    'Domestic Tours - Wild Life Safari & Bird Watching',

                    'Domestic Tours- Adventure',

                    'Domestic Tours- Business & Promotion',

                    'Domestic Tours- Camping',

                    'Domestic Tours- Pilgrimage',

                    'Healing & Holistic Care Tourism',

                    'Honeymoon Packages- Domestic',

                    'Tourism- Domestic Destination',

                    'Tours & Travel Operators- Domestic',

                    'Bollywood Tourism',

                    'Honeymoon Packages- International',

                    'International Tourism- Beach Vacations',

                    'International Tourism- Destination',

                    'International Tourism- Fairs & Festivals',

                    'International Tourism- Heritage',

                    'International Tours- Adventure',

                    'International Tours- Business & Promotion',

                    'International Tours- Educational',

                    'International Tours- Pilgrimage',

                    'International Tours- Wild Life Safari & Bird Watching',

                    'Tour & Travel Operators- International',

                    'Tours- Cruise Liners',

            );

            return $subCats;

        }



        protected function prepareDocument()

	{

                $app = JFactory::getApplication();

		$menus		= $app->getMenu();		

		$menu = $menus->getActive();

//		if ($menu) {

//			$this->params->def('page_heading', $this->params->get('page_title', $menu->title));

//		} else {

//			$this->params->def('page_heading', JText::_('Onam Shopping'));

//		}

//

//		$title = $this->params->get('page_title', '');

//		if (empty($title)) {

//			$title = $app->getCfg('sitename');

//		}

//		elseif ($app->getCfg('sitename_pagetitles', 0) == 1) {

//			$title = JText::sprintf('JPAGETITLE', $app->getCfg('sitename'), $title);

//		}

//		elseif ($app->getCfg('sitename_pagetitles', 0) == 2) {

//			$title = JText::sprintf('JPAGETITLE', $title, $app->getCfg('sitename'));

//		}

//		$this->document->setTitle($title);

//

//		if ($this->params->get('menu-meta_description'))

//		{

//			$this->document->setDescription($this->params->get('menu-meta_description'));

//		}

//

//		if ($this->params->get('menu-meta_keywords'))

//		{

//			$this->document->setMetadata('keywords', $this->params->get('menu-meta_keywords'));

//		}

//

//		if ($this->params->get('robots'))

//		{

//			$this->document->setMetadata('robots', $this->params->get('robots'));

//		}

	}

}