<?php
require('Form.php');
require('tools.php');

use DWA\Form;

class ArtLibrary {
  public $library;
  private $jsonArt;
  private $artLibrary;
  public $bwFilter;
  public $colorFilter;
  public $photoFilter;
  public $yearFilter;
  public $keywordFilter;

  public function displayArtLibrary($library){
    $form = new Form($_GET);

    $bwFilter = $form->get('bw', '');
    $colorFilter = $form->get('color', '');
    $photoFilter = $form->get('photo', '');
    $yearFilter = $form->get('year', '');
    $keywordFilter =$form->get('keyword', '');
    $this->$jsonArt = file_get_contents($library);
    $this->$artLibrary = json_decode($this->$jsonArt, true);
    
    foreach($this->$artLibrary as $artwork){
      $id = $artwork['id'];
      $class = $artwork['class'];
      $tags = $artwork['tags'];
      $year = $artwork['year'];
      $dimensions = $artwork['dimensions'];
      $material = $artwork['material'];
      $url = $artwork['url'];
      $artThumb = '<div class="artwork '.$class.'" id='.$id.' > <a href='.$url.'><img alt='.$id.' class=thumb src='.$url.'> </a>
                 <div class=caption> '.$dimensions.'<br>'.$material.'<br>'.$year.'</div>

                 </div>';
    if($keywordFilter == ''){
          if(($bwFilter == '') && ($colorFilter == '') && ($photoFilter == '')){
            echo $artThumb;
          }
          elseif(($class == 'bw') && ($bwFilter !== '') && (($year==$yearFilter)||($yearFilter==''))){
            echo $artThumb;
          }
          elseif(($class == 'color') && ($colorFilter !== '') && (($year==$yearFilter)||($yearFilter==''))){
            echo $artThumb;
          }

          elseif(($class == 'photo') && ($photoFilter !== '') && (($year==$yearFilter)||($yearFilter==''))){
            echo $artThumb;
          }



        } #endif
    elseif(in_array($keywordFilter, $tags)){
            echo $artThumb;
        }

  }
  }


  // public function displayArt(){
  //   foreach($artLibrary as $artwork){
  //       $id = $artwork['id'];
  //       $class = $artwork['class'];
  //       $tags = $artwork['tags'];
  //       $year = $artwork['year'];
  //       $dimensions = $artwork['dimensions'];
  //       $material = $artwork['material'];
  //       $url = $artwork['url'];
  //       $artThumb = '<div class="artwork '.$class.'" id='.$id.' > <a href='.$url.'><img alt='.$id.' class=thumb src='.$url.'> </a>
  //             <div class=caption> '.$dimensions.'<br>'.$material.'<br>'.$year.'</div>
  //
  //             </div>';
  //
  // if($keywordFilter == ''){
  //     if(($bwFilter == 'off') && ($colorFilter == 'off') && ($photoFilter == 'off')){
  //       echo $artThumb;
  //     }
  //
  //     elseif(($class == 'bw') && ($bwFilter !== 'off') && (($year==$yearFilter)||($yearFilter==''))){
  //          echo $artThumb;
  //       }
  //     elseif(($class == 'color') && ($colorFilter !== 'off') && (($year==$yearFilter)||($yearFilter==''))){
  //          echo $artThumb;
  //       }
  //
  //     elseif(($class == 'photo') && ($photoFilter !== 'off') && (($year==$yearFilter)||($yearFilter==''))){
  //          echo $artThumb;
  //       }
  //     }
  //   elseif(in_array($keywordFilter, $tags)){
  //          echo $artThumb;
  //     }
  //
  // }
  //
  // }#end of function

} #eoc


  // public function displayArt(){
  //   foreach($artLibrary as $artwork){
  //       $id = $artwork['id'];
  //       $class = $artwork['class'];
  //       $tags = $artwork['tags'];
  //       $year = $artwork['year'];
  //       $dimensions = $artwork['dimensions'];
  //       $material = $artwork['material'];
  //       $url = $artwork['url'];
  //       $artThumb = '<div class="artwork '.$class.'" id='.$id.' > <a href='.$url.'><img alt='.$id.' class=thumb src='.$url.'> </a>
  //             <div class=caption> '.$dimensions.'<br>'.$material.'<br>'.$year.'</div>
  //
  //             </div>';
  //
  // if($keywordFilter == ''){
  //     if(($bwFilter == 'off') && ($colorFilter == 'off') && ($photoFilter == 'off')){
  //       echo $artThumb;
  //     }
  //
  //     elseif(($class == 'bw') && ($bwFilter !== 'off') && (($year==$yearFilter)||($yearFilter==''))){
  //          echo $artThumb;
  //       }
  //     elseif(($class == 'color') && ($colorFilter !== 'off') && (($year==$yearFilter)||($yearFilter==''))){
  //          echo $artThumb;
  //       }
  //
  //     elseif(($class == 'photo') && ($photoFilter !== 'off') && (($year==$yearFilter)||($yearFilter==''))){
  //          echo $artThumb;
  //       }
  //     }
  //   elseif(in_array($keywordFilter, $tags)){
  //          echo $artThumb;
  //     }
  //
  // }
  //
  // }#end of function
//   public $bwFilter = $form->get('bw','off');
//   public $colorFilter = $form->get('color','off');
//   public $photoFilter = $form->get('photo','off');
//   public $yearFilter = $form->get('year', '');
//   public $keywordFilter = sanitize($form->get('keyword', ''));
//   // public $id;
//   // public $class;
//   // public $tags;
//   // public $year;
//   // public $dimensions;
//   // public $material;
//   // public $url;
// public function _construct($library){
//   $this->$jsonArt=file_get_contents($library);
//   $this->$artLibrary=json_decode($jsonArt, true);
//   $bwFilter = $form->get('bw','off');
//   $colorFilter = $form->get('color','off');
//   $photoFilter = $form->get('photo','off');
//   $yearFilter = $form->get('year', '');
//   $keywordFilter = sanitize($form->get('keyword', ''));
//
//   } #construct
//
// public function displayArt($artLibrary){
//   dump($artLibrary);
//   } #display
//
 #eoc
