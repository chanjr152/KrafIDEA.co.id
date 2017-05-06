<?php if ( ! defined ( 'BASEPATH' ) ) exit ( 'No direct script access allowed.' );

class Image {

    // public $result = '';
    function __construct(){
         $this->CI = get_instance( );
         $this->CI->load->model('Db_common');
    }

    public function ImageSlider()
    {
        $result ='';
        $dir = "assets/images/slider/";
        $dirimage = glob($dir.'*.jpg');

        $idx = 0;
        foreach ($dirimage as $key) {
            // $result = $result.
            // ' 
            //     <img src="'.base_url($key).'"  alt="" >    
            // '
            // ;
            $result = $result.'<div class="mySlides fade">'
            .'<div class="numbertext">'.$idx.' / 3</div>'
            .'<img src="'.base_url($key).'" style="width:100%">'
            .'<div class="text">Caption Text</div>'
            .'</div>';
            $idx++;
        }
        return $result;
    }

    public function ImageProduct ()
    {
        $result ='';
        $dir = "assets/images/product/";
        $dirimage = glob($dir.'*.jpg');
        // untuk bagian div class="arrival-info" ntar ngambil dari database terkait info produknya

        $listProduct = $this->CI->Db_common->listProduct();
        $idx = 0;
        foreach ($dirimage as $key) {
            $result = $result.
            ' 
            <div class="col-md-2 feature-grid no-padding" style="border:1px solid #eee; margin:5px 5px 5px 5px;">
                     <a href="product.html"><img src="'.base_url($key).'" alt=""/> 
                         <div class="arrival-info">
                             <h4>Product #'.$listProduct[$idx].'</h4>
                             <p>Rp '.$listProduct[$idx].'00</p>
                             <span class="pric1">by</span>
                             <!-- <span class="disc">[8% Off]</span> -->
                             <span class="pric2">Vendor '.$listProduct[$idx].'</span>
                             <hr style="margin: 5px 0px 1px 0px;">
                             <span class="pric1">interior design, industrial ...</span>
                         </div>
                         <div style="background: #eee; padding: 3px 0.7em 3px 0.7em; /*! margin: 3px -0.7em -14px -0.7em; */">
                            <b><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true" style="color:#7F7F7F;"></span>
                            99</b>&nbsp;
                            <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                            789
                            <span class="pull-right" style="margin-bottom: -11px;">#</span>
                         </div>
                         <div class="viw">
                            <a href="detailproduct"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>View</a>
                         </div>
                     </a>
            </div>
            '
            ;
            $idx++;
        }
        return $result;
    }

    /* untuk di halaman supplier */
    public function ImageProduct2 ()
    {
        $result ='';
        $dir = "assets/images/product/";
        $dirimage = glob($dir.'*.jpg');
        // untuk bagian div class="arrival-info" ntar ngambil dari database terkait info produknya

        $listProduct = $this->CI->Db_common->listProduct();
        $idx = 0;

        foreach ($dirimage as $key) {
            $result = $result.
            ' 
            <div class="col-xs-6 item-produk-cst">
                     <a href="product.html"><img src="'.base_url($key).'" alt=""/> 
                         <div class="item-info-cst">
                             <h4>Product #'.$listProduct[$idx].'</h4>
                             <p>Rp '.$listProduct[$idx].'00</p>
                             <span class="pric1">by</span>
                             <!-- <span class="disc">[8% Off]</span> -->
                             <span class="pric2">Vendor '.$listProduct[$idx].'</span>
                             <hr style="margin: 5px 0px 1px 0px;">
                             <span class="pric1">interior design, industrial ...</span>
                         </div>
                         <div class="item-footer-cst">
                            <b><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true" style="color:#7F7F7F;"></span>
                            99</b>
                            <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                            789
                            <span class="pull-right" style="margin-bottom: -11px;">#</span>
                         </div>
                         <div class="viw">
                            <a href="detailproduct"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>View</a>
                         </div>
                     </a>
            </div>
            '
            ;
            $idx++;
            if ($idx == 4)
                break;
        }

        return $result;
    }
}
