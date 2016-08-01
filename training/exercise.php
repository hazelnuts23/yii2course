<html>
<head>
    <title>Yii2 Development Training</title>
</head>
<body>
<?php

class States
{
    function getState()
    {
        return $this->state = array(array("name" => "Selangor", "ibunegeri" => "Shah Alam", "short" => "SGR"),
            array("name" => "Johor", "ibunegeri" => "Johor Bahru", "short" => "JHR"),
            array("name" => "Kedah", "ibunegeri" => "Alor Setar", "short" => "KDH"),
            array("name" => "Kelantan", "ibunegeri" => "Kota Bahru", "short" => "KTN"),
            array("name" => "Melaka", "ibunegeri" => "Bandar Melaka", "short" => "MLK"),
            array("name" => "Negeri Sembilan", "ibunegeri" => "Seremban", "short" => "NSN"),
            array("name" => "Pahang", "ibunegeri" => "Kuantan", "short" => "PHG"),
            array("name" => "Perak", "ibunegeri" => "Ipoh", "short" => "PRK"),
            array("name" => "Perlis", "ibunegeri" => "Kangar", "short" => "PLS"),
            array("name" => "Pulau Pinang", "ibunegeri" => "Georgetown", "short" => "PNG"),
            array("name" => "Sabah", "ibunegeri" => "Kota Kinabalu", "short" => "SBH"),
            array("name" => "Sarawak", "ibunegeri" => "Kuching", "short" => "SWK"),
            array("name" => "Terengganu", "ibunegeri" => "Kuala Terengganu", "short" => "TRG"));
    }
}

$states = new States(); ?>
<style>
    table th, table td {
        padding: 6px 16px;
        text-align: center;
    }
    table .textbold td{
        font-weight: bold;
    }
</style>
<h3>Malaysia States: </h3>
<table cellpadding="0" cellspacing="0" border="1">
    <tr>
        <th>State Name</th>
        <th>Ibu Negeri</th>
        <th>Short Name</th>
    </tr>
    <?php
    foreach ($states->getState() as $state) {
        $bold = "";
        if($state['short'] == 'JHR'){
            $bold = "class='textbold'";
        }
        echo "<tr ".$bold."><td>" . $state["name"] . "</td><td>" . $state['ibunegeri'] . "</td><td>" . $state['short'] . "</td></tr>";
    }
    ?>
</table>
<hr/>
*<b>Bold </b> state is the state you're living in.
</body>
</html>