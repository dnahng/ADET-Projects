<!DOCTYPE html>
<html>
    <head>
        <style>
            table{
                font-family: Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }
            td, th{
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }
            
            tr:nth-child(even) {
                background-color: #dddddd;
            }
            p {
                text-align: center;
            }
        </style>
        </head>
        <body>

        <?php
        $cm = 1;
        $dm = 1;
        $m = 1;
        $km = 1;

        echo "<h2><p>Measure Conversion Chart</p></h2>";
        echo "<h3>Metric Conversions</h3><table><tr>
            <td>".$cm." centimetre </td> <td> = </td>";
        echo "<td>", $cm * 10, " millimetres</td> <td>1 cm</td><td> = </td><td>10 mm</td></tr>";
        echo "<tr><td>".$dm." decimetre</td><td> = </td> <td>".$dm *10," centimetres</td><td>1 dm</td><td> = </td> <td> 10 cm</td></tr>";
        echo "<tr><td>".$m." metre</td><td> = </td> <td>".$m *100," centimetres</td><td>1 m</td><td> = </td> <td> 100 cm</td></tr>";
        echo "<tr><td>".$km." kilometre</td><td> = </td> <td>".$km *1000," metres</td><td>1 km</td><td> = </td> <td> 1000 m</td></tr></table>";
        
        $ft = 1;
        $yd = 1;
        $ch = 1;
        $fur = 1;
        $mi = 1;
        $inch = 12;
        
        echo "<h3>Imperial Conversions</h3><table><tr>
            <td>".$ft." feet </td> <td> = </td>";
        echo "<td>", $ft * $inch, " inches</td> <td>1 ft</td><td> = </td><td>".$inch." inches</td></tr>";
        echo "<tr><td>".$yd." yard</td><td> = </td> <td>".$yd * 3," feet</td><td>1 yd</td><td> = </td> <td> 3 ft</td></tr>";
        echo "<tr><td>".$ch." chain</td><td> = </td> <td>".$ch * 22," yards</td><td>1 ch</td><td> = </td> <td> 22 yd</td></tr>";
        echo "<tr><td>".$fur." furlong</td><td> = </td> <td>".$fur * 220," yards (or ".$fur * 10," chains)
            </td><td>1 fur</td><td> = </td> <td> 220 yd (or 10 ch)</td></tr>";
        echo "<tr><td>".$mi." mile</td><td> = </td> <td>".$mi * 1760," yards (or ".$fur * 8," furlongs)</td><td>1 fur
            </td><td> = </td> <td> 1760 yd (or 8 fur)</td></tr></table>";
        
        $mm = 1;

        echo "<h3>Metric -> Imperial Conversions</h3><table><tr><td>".$mm." millimetre </td> <td> = </td>";
        echo "<td>", $mm *= 0.03937, " inches</td> <td>1 mm</td><td> = </td><td>".$mm." in</td></tr>";
        echo "<tr><td>".$cm." centimetre</td><td> = </td> <td>".$cm * 0.39370," inches</td><td>1 cm</td><td> = </td> <td> 0.39370 in</td></tr>";
        echo "<tr><td>".$m." metre</td><td> = </td> <td>".$inch = $m * 39.37008," inches</td><td>1 m</td><td> = </td> <td>".$inch." in</td></tr>";
        echo "<tr><td>".$m." metre</td><td> = </td> <td>".$ft*=3.28084," feet</td><td>1 m</td><td> = </td> <td>".$ft." ft</td></tr>";
        echo "<tr><td>".$m." metre</td><td> = </td> <td>".$yd*=1.09361," yards</td><td>1 m</td><td> = </td> <td>".$yd." yd</td></tr>";
        echo "<tr><td>".$km." kilometre</td><td> = </td> <td>".$yd=($yd*1000)+0.0033," yards</td><td>1 km</td><td> = </td> <td>".$yd." yd</td></tr>";
        echo "<tr><td>".$km." kilometre</td><td> = </td> <td>".$mi*=0.62137," miles</td><td>1 km</td><td> = </td> <td>".$mi." mi</td></tr></table>";

        $ft = 1;
        $yd = 1;
        $mi = 1;
        $inch = 1;
        echo "<h3>Imperial -> Metric Conversions</h3><table><tr><td>".$inch." inch </td> <td> = </td>";
        echo "<td>", $cm *= 2.54, " centimetres</td> <td>1 in</td><td> = </td><td>".$cm." cm</td></tr>";
        echo "<tr><td>".$ft." foot</td><td> = </td> <td>".$cm = 30.48," centimetres</td><td>1 ft</td><td> = </td> <td>".$cm." cm</td></tr>";
        echo "<tr><td>".$yd." yard</td><td> = </td> <td>".$cm += 60.96," centimetres</td><td>1 yd</td><td> = </td> <td>".$cm." cm</td></tr>";
        echo "<tr><td>".$yd." yard</td><td> = </td> <td>".$m*=0.9144," metres</td><td>1 yd</td><td> = </td> <td>".$m." m</td></tr>";
        echo "<tr><td>".$mi." mile</td><td> = </td> <td>".$m=1609.344," metres</td><td>1 mi</td><td> = </td> <td>".$m." m</td></tr>";
        echo "<tr><td>".$mi." mile</td><td> = </td> <td>".$km=$m/1000," kilometres</td><td>1 mi</td><td> = </td> <td>".$km." km</td></tr></table>";
        ?>
    </body>
</html>