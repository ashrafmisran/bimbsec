<style type="text/css">
  
.nextbtn, .prevbtn{
  margin-top:190px !important;
}

</style>

<div class="bg-primary">
  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="height: 407px">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active">1</li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

    <?php 

      $sql    = 'SELECT * FROM slider WHERE status = "active"';
      $result = $conn->query($sql);
      $i = 1;
      while ($row = $result->fetch_assoc()) {
       
        switch ($row['layout_type']) {
          case '1':
            $align = 'left';
            $Align = 'Left';
            $left  = '10%';
            $right = '50%';
            break;
          case '2':
            $align = 'right';
            $Align = 'Right';
            $left  = '50%';
            $right = '10%';
            break;
          default:
            # code...
            break;
        }

        if ($i == 1) {
          $if_active = 'active';
        } else {
          $if_active = '';
        }

        echo
        '<div class="item '.$if_active.'">
          <img src="img/slider/'.$row['img_src'].'" alt="'.$row['img_title'].'" style="width:100%; ">';
          if (isset($row['heading2']) && $row['heading2'] != ''){
            echo'
              <div class="carousel-caption" style="text-align: '.$align.'; padding-bottom: 100px; left:'.$left.'; right: '.$right.'">
                <div id="caption-text" class="animated bounceIn'.$Align.' delay-500ms">
                  <h3 style="color:gold">'.$row['heading1'].'</h3>
                  <h1 style="color:white; margin: -20px 0 0 0">'.$row['heading2'].'</h1>
                  <h4 style="color:lightgrey"><span class="caption-desc">'.$row['text'].'</span></h4>
                </div>
                <a href="'.$row['link_href'].'" id="caption-btn" class="btn btn-success animated rotateIn delay-1500ms caption-btn" onmouseover="addAnimation()">'.$row['link_text'].'</a>
              </div>
              <div class="bg-primary carousel-caption-mobile">
                <div class="container">
                  <div class="row">
                    <div class="col-sm-8">
                      <h1>'.$row['heading1'].' <b style="text-decoration: underline;">'.$row['heading2'].'</b></h1>
                      <h4>'.$row['text'].'</h4>  
                    </div>
                    <div class="col-sm-4">
                      <a href="'.$row['link_href'].'" class="btn btn-success">'.$row['link_text'].'</a>
                    </div>
                    <br>
                  </div>
                </div>
              </div>
            ';
          }
        echo '
        </div>';

        $i += 1;
        
      }


    ?>

      


    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class=""><i class="prevbtn fa fa-chevron-left" aria-hidden="true"></i></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class=""><i class="nextbtn fa fa-chevron-right" aria-hidden="true"></i></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


