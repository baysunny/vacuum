<?php

error_reporting(0);
ini_set('display_errors', 0);

class MainPage{

    private $pageTitle;
    private $host;

    function __construct($pageTitle){
        global $CONFIG;
        require_once $_SERVER['DOCUMENT_ROOT']."/assets/template/header_outside.php";
        require_once $_SERVER['DOCUMENT_ROOT']."/assets/library/global.php";
        require_once $_SERVER['DOCUMENT_ROOT']."/assets/template/echo_html.php";
        $this->host = $CONFIG["HOST"];
        $this->pageTitle = $pageTitle;
    }

    function homePage(){
        $data = array();
        $url = $this->host."/assets/handler/handler_article.php";
        $data["articles"] = json_decode(request(
            array('get_articles' => "NONE"
        ), $url), true)["articles"];

        $url = $this->host."/assets/handler/handler_review.php";
        $data["reviews"] = json_decode(request(
            array('get_reviews' => "NONE"
        ), $url), true)["reviews"];

        $url = $this->host."/assets/handler/handler_service.php";
        $data["services"] = json_decode(request(
            array('get_services' => "NONE"
        ), $url), true)["services"];
        // echo "<pre>";
        // print_r($data["services"]);
        MainPage_Template_homePage($data);
    }

    function aboutUsPage(){
        $data = array();
        $url = $this->host."/assets/handler/handler_article.php";
        $data["articles"] = json_decode(request(
            array('get_articles' => "NONE"
        ), $url), true)["articles"];

        MainPage_Template_aboutUsPage($data);
    }

    function servicePage(){
        $data = array();
        $data["services"] = array(
            array(
                "serviceID"=>1,
                "icon"=>"sunny-icon-disgusting-trash",
                "title"=>"PENYEDOTAN SEPTIC TANK",
                "description"=>"Melayani Jasa Penyedotan Untuk Limbah Tinja.",
                "fullDescription"=>"",
                "image"=>""
            ),
            array(
                "serviceID"=>2,
                "icon"=>"sunny-icon-water",
                "title"=>"GRAYWATER NON B3",
                "description"=>"Melayani Jasa Pengangkutan Limbah Industri Non B3.",
                "fullDescription"=>"",
                "image"=>""
            ),
            array(
                "serviceID"=>3,
                "icon"=>"sunny-icon-trash",
                "title"=>"LIMBAH LEMAK RESTO",
                "description"=>"Melayani Pengangkutan/penyedotan Limbah Lemak Resto, Catering, Toko Kue, Pabrik Dll.",
                "fullDescription"=>"",
                "image"=>""
            ),
            array(
                "serviceID"=>4,
                "icon"=>"sunny-icon-limbah",
                "title"=>"LIMBAH INDUSTRI NON B3",
                "description"=>"Melayani Jasa Pengangkutan Limbah Non B3.",
                "fullDescription"=>"",
                "image"=>""
            ),
            array(
                "serviceID"=>5,
                "icon"=>"sunny-icon-limbah",
                "title"=>"B3",
                "description"=>"Melayani Jasa Pengangkutan Limbah Non B3.",
                "fullDescription"=>"",
                "image"=>""
            ),
            array(
                "serviceID"=>6,
                "icon"=>"sunny-icon-limbah",
                "title"=>"Ketiduran",
                "description"=>"Aku Mau Tidur",
                "fullDescription"=>"",
                "image"=>""
            )
        );
        $url = $this->host."/assets/handler/handler_service.php";
        $data["services"] = json_decode(request(
            array('get_services' => "NONE"
        ), $url), true)["services"];

        MainPage_Template_servicePage($data);
    }

    function serviceDetailPage($featureID){
        $data = array();
        $data["serviceDetailID"] = $featureID;
        $data["services"] = array(
            array(
                "serviceID"=>1,
                "icon"=>"sunny-icon-disgusting-trash",
                "title"=>"PENYEDOTAN SEPTIC TANK",
                "description"=>"Melayani Jasa Penyedotan Untuk Limbah Tinja.",
                "fullDescription"=>"",
                "image"=>""
            ),
            array(
                "serviceID"=>2,
                "icon"=>"sunny-icon-water",
                "title"=>"GRAYWATER NON B3",
                "description"=>"Melayani Jasa Pengangkutan Limbah Industri Non B3.",
                "fullDescription"=>"",
                "image"=>""
            ),
            array(
                "serviceID"=>3,
                "icon"=>"sunny-icon-trash",
                "title"=>"LIMBAH LEMAK RESTO",
                "description"=>"Melayani Pengangkutan/penyedotan Limbah Lemak Resto, Catering, Toko Kue, Pabrik Dll.",
                "fullDescription"=>"",
                "image"=>""
            ),
            array(
                "serviceID"=>4,
                "icon"=>"sunny-icon-limbah",
                "title"=>"LIMBAH INDUSTRI NON B3",
                "description"=>"Melayani Jasa Pengangkutan Limbah Non B3.",
                "fullDescription"=>"",
                "image"=>""
            ),
            array(
                "serviceID"=>5,
                "icon"=>"sunny-icon-limbah",
                "title"=>"B3",
                "description"=>"Melayani Jasa Pengangkutan Limbah Non B3.",
                "fullDescription"=>"",
                "image"=>""
            ),
            array(
                "serviceID"=>6,
                "icon"=>"sunny-icon-limbah",
                "title"=>"Ketiduran",
                "description"=>"Aku Mau Tidur",
                "fullDescription"=>"",
                "image"=>""
            )
        );

        $url = $this->host."/assets/handler/handler_service.php";
        $data["services"] = json_decode(request(
            array('get_services' => "NONE"
        ), $url), true)["services"];
        // echo "<pre>";
        // print_r($data["services"]);
        MainPage_Template_serviceDetailPage($data);
    }

    function benefitPage(){
        $data = array();
        MainPage_Template_benefitPage($data);
    }

    function workAreaPage(){
        $data = array();
        // $url = "https://baysunny7.000webhostapp.com/assets/handler/handler_work_area.php";
        $url = $this->host."/assets/handler/handler_work_area.php";

        $data["workAreas"] = json_decode(request(
            array('get_workAreas' => "NONE"
        ), $url), true)["workAreas"];

        // echo "<pre>";
        // print_r($data["workAreas"]);

        MainPage_Template_workAreaPage($data);
    }

    function contactPage(){
        $data = array();
        MainPage_Template_contactPage($data);
    }

    function iamLostPage(){
        $data = array();
        MainPage_Template_iamLostPage($data);
    }

    function __destruct(){
        require_once $_SERVER['DOCUMENT_ROOT']."/assets/template/footer_outside.php";
    }
}

class AuthenticationPage{
    private $pageTitle;
    private $host;

    function __construct($pageTitle){
        global $CONFIG;
        require_once $_SERVER['DOCUMENT_ROOT']."/assets/template/header_outside.php";
        require_once $_SERVER['DOCUMENT_ROOT']."/assets/library/global.php";
        require_once $_SERVER['DOCUMENT_ROOT']."/assets/template/echo_html.php";
        $this->host = $CONFIG["HOST"];
        $this->pageTitle = $pageTitle;
    }

    function loginPage(){
        $data = array();
        $data["pageTitle"] = $this->pageTitle;
        AuthenticationPage_Template_loginPage($data);
    }

    function redirectPage($code, $authentication){
        $url = $this->host."/assets/handler/handler_authentication.php";

        if($authentication == "login"){
            $loginStatus = json_decode(request(
                array("verify_login" => "YES", 
                      "code"=>$code
                ), $url), true);
            if($loginStatus["status"] != "success"){
                echo $loginStatus["info"];
                session_unset();
                unset($_SESSION);
                session_destroy();
                header("Location: /");
                
            }else{
                $_SESSION['username'] = $loginStatus["session"]['username'];
                $_SESSION['code'] = $loginStatus["session"]['code'];           
                // echo $loginStatus["info"];
                header("Location:/dashboard");
                
            }
        }else{
            session_unset();
            unset($_SESSION);
            session_destroy();
            header("Location: /");
            
        }
    }
}

class RedirectPage{
    private $pageTitle;
    private $host;

    function __construct($pageTitle){
        global $CONFIG;
        @session_start();
        require_once $_SERVER['DOCUMENT_ROOT']."/assets/library/global.php";
        $this->host = $CONFIG["HOST"];
        $this->pageTitle = $pageTitle;
    }

   
    function redirectPage($code, $authentication){
        $url = $this->host."/assets/handler/handler_authentication.php";

        if($authentication == "login"){
            $loginStatus = json_decode(request(
                array("verify_login" => "YES", 
                      "code"=>$code
                ), $url), true);
            if($loginStatus["status"] != "success"){
                echo $loginStatus["info"];
                session_unset();
                unset($_SESSION);
                session_destroy();
                // header("Location: /");
                
            }else{
                $_SESSION['username'] = $loginStatus["session"]['username'];
                $_SESSION['code'] = $loginStatus["session"]['code'];           
                // echo $loginStatus["info"];
                header("Location:/dashboard");
                
            }
        }else{
            session_unset();
            unset($_SESSION);
            session_destroy();
            header("Location: /");
            
        }
    }
}


//=============== inside

class UserArea{
    protected $pageTitle;
    protected $host;
    protected $sidebarMenu;

    function __construct($pageTitle){
        global $CONFIG;
        require_once $_SERVER['DOCUMENT_ROOT']."/assets/template/header_inside.php";
        require_once $_SERVER['DOCUMENT_ROOT']."/assets/library/global.php";
        require_once $_SERVER['DOCUMENT_ROOT']."/assets/template/echo_html.php";
        $this->host = $CONFIG["HOST"];
        $this->pageTitle = $pageTitle;
        $this->sidebarMenu = array(
            "dashboard"=>array("page"=>"Dashboard", "icon"=>"home", "url"=>"/dashboard", "status"=>""),
            "services"=>array("page"=>"Layanan", "icon"=>"slack", "url"=>"/dashboard/services", "status"=>""),
            "work-area"=>array("page"=>"Area Kerja", "icon"=>"map", "url"=>"/dashboard/work-areas", "status"=>""),
            "reviews"=>array("page"=>"Reviews", "icon"=>"star", "url"=>"/dashboard/reviews", "status"=>""),
        );

        $url = $this->host."/assets/handler/handler_authentication.php";
        $sessionStatus = json_decode(request(
            array('verify_session' => 'YES',
                  'username'=>$_SESSION['username'],
                  'code'=>$_SESSION['code']
        ), $url), true);
        

        if($sessionStatus["status"] != "success"){
            header('Location: /authentication/redirect.php?code='.$_SESSION['code'].'&authentication=logout');
        }
    }
}

class DashboardPage extends UserArea{

    function __construct(){
        parent::__construct(...func_get_args());
    }

    function dashboardPage(){
        $data = array();

        $url = $this->host."/assets/handler/handler_article.php";
        $data["articles"] = json_decode(request(
            array('get_articles' => $_SESSION['username']
        ), $url), true)["articles"];

        $data["sidebarMenu"] = $this->sidebarMenu;
        $data["sidebarMenu"]["dashboard"]["status"] = "active";
        DashboardPage_Template_dashboardPage($data);
    }

    function servicesPage(){
        $data = array();
        $data["services"] = array(
            array(
                "serviceID"=>1,
                "icon"=>"sunny-icon-disgusting-trash",
                "title"=>"PENYEDOTAN SEPTIC TANK",
                "description"=>"Melayani Jasa Penyedotan Untuk Limbah Tinja.",
                "fullDescription"=>"",
                "image"=>""
            ),
            array(
                "serviceID"=>2,
                "icon"=>"sunny-icon-water",
                "title"=>"GRAYWATER NON B3",
                "description"=>"Melayani Jasa Pengangkutan Limbah Industri Non B3.",
                "fullDescription"=>"",
                "image"=>""
            ),
            array(
                "serviceID"=>3,
                "icon"=>"sunny-icon-trash",
                "title"=>"LIMBAH LEMAK RESTO",
                "description"=>"Melayani Pengangkutan/penyedotan Limbah Lemak Resto, Catering, Toko Kue, Pabrik Dll.",
                "fullDescription"=>"",
                "image"=>""
            ),
            array(
                "serviceID"=>4,
                "icon"=>"sunny-icon-limbah",
                "title"=>"LIMBAH INDUSTRI NON B3",
                "description"=>"Melayani Jasa Pengangkutan Limbah Non B3.",
                "fullDescription"=>"",
                "image"=>""
            ),
            array(
                "serviceID"=>5,
                "icon"=>"sunny-icon-limbah",
                "title"=>"B3",
                "description"=>"Melayani Jasa Pengangkutan Limbah Non B3.",
                "fullDescription"=>"",
                "image"=>""
            ),
            array(
                "serviceID"=>6,
                "icon"=>"sunny-icon-limbah",
                "title"=>"Ketiduran",
                "description"=>"Aku Mau Tidur",
                "fullDescription"=>"",
                "image"=>""
            )
        );
        
        $url = $this->host."/assets/handler/handler_service.php";
        $data["services"] = json_decode(request(
            array('get_services' => "NONE"
        ), $url), true)["services"];


        $data["sidebarMenu"] = $this->sidebarMenu;
        $data["sidebarMenu"]["services"]["status"] = "active";
        // echo "<pre>";
        // print_r($data);
        DashboardPage_Template_servicePage($data);
    }

    function workAreasPage(){
        $data = array();
        
        $url = $this->host."/assets/handler/handler_work_area.php";
        $data["workAreas"] = json_decode(request(
            array('get_workAreas' => "NONE"
        ), $url), true)["workAreas"];
        // echo "<pre>";
        // print_r($data["workAreas"]);
        $data["sidebarMenu"] = $this->sidebarMenu;
        $data["sidebarMenu"]["work-area"]["status"] = "active";
        DashboardPage_Template_workAreaPage($data);
    }

    function reviewsPage(){
        $data = array();
        
        $url = $this->host."/assets/handler/handler_review.php";
        $data["reviews"] = json_decode(request(
            array('get_reviews' => "NONE"
        ), $url), true)["reviews"];

        $data["sidebarMenu"] = $this->sidebarMenu;
        $data["sidebarMenu"]["reviews"]["status"] = "active";
        DashboardPage_Template_reviewPage($data);
    }
}

class SettingPage extends UserArea{
    
    function __construct(){
        parent::__construct(...func_get_args());
    }

    function settingPage(){
        $data = array();

        $url = $this->host."/assets/handler/handler_user.php";
        $data["user"] = json_decode(request(
            array('get_user' => '', 'username'=>$_SESSION['username'], 'code'=>$_SESSION['code']
        ), $url), true);
        
        if($data["user"]["status"] != "success"){
            header('Location: /authentication/redirect.php?code='.$_SESSION['code'].'&authentication=logout');
        }

        $data["user"] = $data["user"]["user"];
        $data["sidebarMenu"] = $this->sidebarMenu;
        SettingPage_Template_settingPage($data);
    }
}