<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <style>
        body{ background-color: rgb(160, 160, 253);}
    </style>
</head>
<body>
    <?php
      $name = isset($_GET ["nome"])?$_GET["nome"]:0;
      $a1 = isset($_GET ["1"])?$_GET["1"]:0;
      $a2 = isset($_GET ["2"])?$_GET["2"]:0;
      $a3 = isset($_GET ["3"])?$_GET["3"]:0;
      $a4 = isset($_GET ["4"])?$_GET["4"]:0;
      $a5 = isset($_GET ["5"])?$_GET["5"]:0;
      $a6 = isset($_GET ["6"])?$_GET["6"]:0;
      $a7 = isset($_GET ["7"])?$_GET["7"]:0;
      $a8 = isset($_GET ["8"])?$_GET["8"]:0;
      $a9 = isset($_GET ["9"])?$_GET["9"]:0;
      $a10 = isset($_GET ["10"])?$_GET["10"]:0;
      $ca= 0;

      if ( $a1 == "1") {
         $ca= +1;
      }
        if ( $a2 == "3") {
         $ca = $ca +1;
        }
        if ( $a3 == "5") {
          $ca = $ca +1;
         }
         if ( $a4 == "7") {
          $ca = $ca +1;
         }
         if ( $a5 == "9") {
          $ca = $ca +1;
         }
         if ( $a6 == "11") {
          $ca = $ca +1;
         }
         if ( $a7 == "13") {
          $ca = $ca +1;
         }
         if ( $a8 == "15") {
          $ca = $ca +1;
         }
         if ( $a9 == "17") {
          $ca = $ca +1;
         }
         if ( $a10 == "19") {
          $ca = $ca +1;
         }

        //echo "$ca";

      $b1 = isset($_GET ["11"])?$_GET["11"]:0;
      $b2 = isset($_GET ["12"])?$_GET["12"]:0;
      $b3 = isset($_GET ["13"])?$_GET["13"]:0;
      $b4 = isset($_GET ["14"])?$_GET["14"]:0;
      $b5 = isset($_GET ["15"])?$_GET["15"]:0;
      $b6 = isset($_GET ["16"])?$_GET["16"]:0;
      $b7 = isset($_GET ["17"])?$_GET["17"]:0;
      $b8 = isset($_GET ["18"])?$_GET["18"]:0;
      $b9 = isset($_GET ["19"])?$_GET["19"]:0;
      $b10 = isset($_GET ["20"])?$_GET["20"]:0;
      $ba = 0;

      if ( $b1 == "21") {
         $ba = +1;
      }
        if ( $b2 == "23") {
         $ba = $ba +1;
        }
        if ( $b3 == "25") {
          $ba = $ba +1;
         }
         if ( $b4 == "27") {
          $ba = $ba +1;
         }
         if ( $b5 == "29") {
          $ba = $ba +1;
         }
         if ( $b6 == "31") {
          $ba = $ba +1;
         }
         if ( $b7 == "33") {
          $ba = $ba +1;
         }
         if ( $b8 == "35") {
          $ba = $ba +1;
         }
         if ( $b9 == "37") {
          $ba = $ba +1;
         }
         if ( $b10 == "39") {
          $ba = $ba +1;
         }


         $c1 = isset($_GET ["21"])?$_GET["21"]:0;
         $c2 = isset($_GET ["22"])?$_GET["22"]:0;
         $c3 = isset($_GET ["23"])?$_GET["23"]:0;
         $c4 = isset($_GET ["24"])?$_GET["24"]:0;
         $c5 = isset($_GET ["25"])?$_GET["25"]:0;
         $c6 = isset($_GET ["26"])?$_GET["26"]:0;
         $c7 = isset($_GET ["27"])?$_GET["27"]:0;
         $c8 = isset($_GET ["28"])?$_GET["28"]:0;
         $c9 = isset($_GET ["29"])?$_GET["29"]:0;
         $c10 = isset($_GET ["30"])?$_GET["30"]:0;
         $da= 0;

         if ( $c1 == "41") {
            $da = +1;
         }
           if ( $c2 == "43") {
            $da = $da +1;
           }
           if ( $c3 == "45") {
             $da = $da +1;
            }
            if ( $c4 == "47") {
             $da = $da +1;
            }
            if ( $c5 == "49") {
             $da = $da +1;
            }
            if ( $c6 == "51") {
             $da = $da +1;
            }
            if ( $c7 == "53") {
             $da = $da +1;
            }
            if ( $c8 == "55") {
             $da = $da +1;
            }
            if ( $c9 == "57") {
             $da = $da +1;
            }
            if ( $c10 == "59") {
             $da = $da +1;
            }

            echo "$ca <br> $ba <br> $da <br> ";

            $m1= "$name, você é Visual! <br> A pessoa com predominância visual é ligada na beleza e estética, em formas de detalhes. Tem uma postura corporal rígida e sua respiração é torácica. Ela fala muito rapidamente, porque as imagens se sucedem em sua mente, como um filme. Entre o prático e o bonito, a pessoa visual sempre escolherá o bonito. Normalmente é obcecada por arrumação e ordem e para atender o que lhe dizem, a pessoa visual precisa que 'mostrem' o que é. O visual não dá valor as palavras e não reage bem ao toque ao contrário da pessoa cinestésico. <br>" ;

            $m2 = "$name, você é Auditivo! <br> A pessoa com predominância auditiva, não dá grande valor às aparências, mas sim ao bom papo, bom senso e inteligência. São equilibradas e estão sempre prontas a discutir os problemas, pois acreditam na lógica dos argumentos. O tom de voz é médio, a respiração é torácica e abdominal. A memória para os sons é fantástica: São capazes de lembrar-se de coisas que lhes foram ditas há muitos anos. O barulho, vozes, estridentes ou ásperas ferem as pessoas auditivas. Apreciam músicas com letras bem elaboradas que passam uma mensagem consistente. Para ter certeza de alguma coisa, o auditivo precisa ouvir, do contrário, não acreditará. <br>";

            $m3 = " $name , você é Cinestésico! <br> A pessoa com predominância do canal cinestésico é, dos 3 tipos, o mais sujeito ao sofrimento. Para esta pessoa, todas as experiências são físicas. Esta pessoa prefere conforto à beleza e busca sempre o bem-estar, o prazer e o aconchego. Este tipo de pessoa precisa ser abraçado, tocada, beijada, para que se sinta amada. Ela prefere roupas velhas e confortáveis, sapatos que não apertem, nadar, pisar na areia, estar junto a natureza. As pessoas cinestésicas possui o tom de voz baixo, ritmo lento e respiração abdominal. Gostam de músicas lentas e baladas e se sentem agredidas quando não são correspondidas em sua necessidade de contato corporal. <br>";

            $m4 = "$name, você é Visual e Auditivo! <br> A pessoa com predominância visual é ligada na beleza e estética, em formas de detalhes. Tem uma postura corporal rígida e sua respiração é torácica. Ela fala muito rapidamente, porque as imagens se sucedem em sua mente, como um filme. Entre o prático e o bonito, a pessoa visual sempre escolherá o bonito. Normalmente é obcecada por arrumação e ordem e para atender o que lhe dizem, a pessoa visual precisa que 'mostrem' o que é. O visual não dá valor as palavras e não reage bem ao toque ao contrário da pessoa cinestésico. <br> <br> A pessoa com predominância auditiva, não dá grande valor às aparências, mas sim ao bom papo, bom senso e inteligência. São equilibradas e estão sempre prontas a discutir os problemas, pois acreditam na lógica dos argumentos. O tom de voz é médio, a respiração é torácica e abdominal. A memória para os sons é fantástica: São capazes de lembrar-se de coisas que lhes foram ditas há muitos anos. O barulho, vozes, estridentes ou ásperas ferem as pessoas auditivas. Apreciam músicas com letras bem elaboradas que passam uma mensagem consistente. Para ter certeza de alguma coisa, o auditivo precisa ouvir, do contrário, não acreditará. <br>";

            $m5 = "$name, você é Visual e Cinestésico! <br> A pessoa com predominância visual é ligada na beleza e estética, em formas de detalhes. Tem uma postura corporal rígida e sua respiração é torácica. Ela fala muito rapidamente, porque as imagens se sucedem em sua mente, como um filme. Entre o prático e o bonito, a pessoa visual sempre escolherá o bonito. Normalmente é obcecada por arrumação e ordem e para atender o que lhe dizem, a pessoa visual precisa que 'mostrem' o que é. O visual não dá valor as palavras e não reage bem ao toque ao contrário da pessoa cinestésico.<br>
             A pessoa com predominância do canal cinestésico é, dos 3 tipos, o mais sujeito ao sofrimento. Para esta pessoa, todas as experiências são físicas. Esta pessoa prefere conforto à beleza e busca sempre o bem-estar, o prazer e o aconchego. Este tipo de pessoa precisa ser abraçado, tocada, beijada, para que se sinta amada. Ela prefere roupas velhas e confortáveis, sapatos que não apertem, nadar, pisar na areia, estar junto a natureza. As pessoas cinestésicas possui o tom de voz baixo, ritmo lento e respiração abdominal. Gostam de músicas lentas e baladas e se sentem agredidas quando não são correspondidas em sua necessidade de contato corporal. <br>";

            $m6 = "$name, você é Auditivo e Cinestésico! <br> A pessoa com predominância auditiva, não dá grande valor às aparências, mas sim ao bom papo, bom senso e inteligência. São equilibradas e estão sempre prontas a discutir os problemas, pois acreditam na lógica dos argumentos. O tom de voz é médio, a respiração é torácica e abdominal. A memória para os sons é fantástica: São capazes de lembrar-se de coisas que lhes foram ditas há muitos anos. O barulho, vozes, estridentes ou ásperas ferem as pessoas auditivas. Apreciam músicas com letras bem elaboradas que passam uma mensagem consistente. Para ter certeza de alguma coisa, o auditivo precisa ouvir, do contrário, não acreditará.
             <br> A pessoa com predominância do canal cinestésico é, dos 3 tipos, o mais sujeito ao sofrimento. Para esta pessoa, todas as experiências são físicas. Esta pessoa prefere conforto à beleza e busca sempre o bem-estar, o prazer e o aconchego. Este tipo de pessoa precisa ser abraçado, tocada, beijada, para que se sinta amada. Ela prefere roupas velhas e confortáveis, sapatos que não apertem, nadar, pisar na areia, estar junto a natureza. As pessoas cinestésicas possui o tom de voz baixo, ritmo lento e respiração abdominal. Gostam de músicas lentas e baladas e se sentem agredidas quando não são correspondidas em sua necessidade de contato corporal. <br>";


           if ($ca > $ba && $ca> $da) {
            echo "$m1";
           } 

          if ($ba > $ca && $ba > $da){
            echo "$m2";
          }


          if ($da > $ca && $da >$ba){
            echo "$m3";
          }


          if (($ca == $ba) && $ca > $da ){
            echo "$m4";
          }

          if (($ca == $da) && $ca > $ba ){
            echo " $m5 ";
          }


          if (($da == $ba) && $da > $ca ){
            echo "$m6";
          }
    ?>
</body>
</html>