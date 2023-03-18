<table><tr><td class="tanggal" colspan="2">Live draw HK hari Kamis , Tanggal 16 Maret  2023</td></tr><tr>
<td colspan='8' style='width:100%; height: auto; box-sizing: border-box; border: 1px solid white;'>
</td>
</tr><tr height=40><td class="prize" colspan="1">PRIZE 1</td><td class="othernum" align="center"><a class="prize1" style = "color:#red;text-decoration:none;" href = "http://159.223.39.75/">
861971

</a></td></tr><tr>
<td colspan='8' style='width:100%; height: auto; box-sizing: border-box; border: 1px solid white;'>
</td>
</tr><tr height=40><td class="prize" colspan="1">PRIZE 2</td><td class="othernum" align="center">
776798
        
    
    
</td></tr><tr>
<td colspan='8' style='width:100%; height: auto; box-sizing: border-box; border: 1px solid white;'>
</td>
</tr><tr height=40><td class="prize" colspan="1">PRIZE 3</td><td class="othernum" align="center">
082728
    
</td></tr><tr><td class="tanggal" colspan="2">STARTER PRIZE</td></tr><tr><td class="othernum" colspan="1">
838772
</td><td class="othernum" colspan="1">
384277

    
</td></tr><tr><td class="othernum" colspan="1">
216001
</td><td class="othernum" colspan="1">
894506


    
</td></tr><tr><td class="tanggal" colspan="2">CONSOLATION</td></tr><tr><td class="othernum" colspan="1">
910734
</td><td class="othernum" colspan="1">
250031

    
    
</td></tr><tr><td class="othernum" colspan="1">
833387
</td><td class="othernum" colspan="1">
939433



</td></tr><tr><td class="othernum" colspan="1">
090055
</td><td class="othernum" colspan="1">
030568	


    
    
</td></tr><tr><td class="othernum" colspan="1">
436594
</td><td class="othernum" colspan="1">
503833

    
</td></tr></table>

<table class="tablelive">
<?php
// URL TARGET
$url = 'http://159.223.39.75/hongkong.php?randval=';
//end
// get / mengambil content berdasarkan url yang akan di curi datanya
$content = file_get_contents($url);
//
// STEP 1 mengambil syntax pembuka
$first_step = explode( '<tbody>' , $content );
//
// STEP 2 mengambil syntax penutup
$second_step = explode("</table>" , $first_step[1] );
//
// Replace syntax </tbody> dengan </tbody></table>
$text1 = $second_step[0];
//Tampilkan 
echo $text1 = str_replace('https://angkahokiads.github.io/amor/hongkong.php?randval=', 'https://angkahokiads.github.io/amor/', $second_step[0]);
?>
</table>
