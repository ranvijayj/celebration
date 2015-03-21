<?php

defined('_JEXEC') or die;
jimport( 'joomla.application.component.view');
class OnamViewDetail extends JView
{
    var $_rating=null;
    var $_item=null;
    var $_description=null;
    var $_image=null;

	public function display($tpl = null)
	{
            	$app		=   JFactory::getApplication();
                $params         =   $app->getParams();
		$this->getOnamShopping($params);
		parent::display($tpl);
	}
        
        public function getOnamShopping($params){

            $pageno=JRequest::getVar('p',0);
            $what=JRequest::getVar('what','shopping');
//            echo $cat=JRequest::getVar('cat',null);
//            echo $subCat=JRequest::getVar('subCat',null);
//            die;
            $url='http://microcommunity.getit.in/ypxmldata.aspx?';
            $what=  'Shopping';
            
				$wat=JRequest::getVar('what');
			
			if($wat=="")
			{
				$url.='what='.urlencode($what);
			}
			else
			{
				  $url.='what='.urlencode($wat);
				}
				
					
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
            $where=JRequest::getVar('where');
			if($where=="")
			{
			$where="Kerala";	
			}
            if(isset($where)){
                $url.='&where='.urlencode($where);
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
//                print_r($xmlobj);die;
                if($xmlobj->success):
                    $wsResult=$xmlobj->results;
                    
                     foreach($wsResult as $val){
                        foreach($val as $value)
                        {
                            $comp[]=$value;
                        }
                    }
                                   foreach($comp as $val){
                                        if((string)$val->companyid==$_REQUEST['id']):
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
                                    else:
                                    continue;
                                    endif;
                                }
                        $Result=$rows;                            
                else:
                    $wsResult=false;
                    $Result=false;
                endif;
                $this->_item=$Result;
          
        }
}
