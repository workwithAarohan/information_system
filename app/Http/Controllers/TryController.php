<?php

namespace App\Http\Controllers;
include "simple_html_dom.php";

use Illuminate\Http\Request;
use simple_html_dom;

class TryController extends Controller
{

    public function staffMembers($id=1)
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'http://online.pis.gov.np/intranet/docprOnline/home/employee.php?page='.$id);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($curl);

        curl_close($curl);

        $html = new simple_html_dom();
        $html->load($response);

        $pageNo = $html->find('a[href*="/intranet/docprOnline/home/employee.php?&page="]',-2)->plaintext;

        $staffs = array();

        $datas = $html->find('.commonNepali');

        $j=0 + (10*($id-1));
        foreach($datas as $data)
        {
            $i=1;
            $texts = $data->find('tr td tr td tr td tr');
            $staffs[$j] = array();

            foreach($texts as $text)
            {
                $value = $text->children(2)->plaintext;

                $staffs[$j][$i] = html_entity_decode($value);

                if($i==6)
                {
                    $j++;
                    $i=0;
                }

                $i++;
            }
        }

        $index = 0 + (10*($id-1));
        foreach($html->find('img[src*="displayPhoto.php?cd="]') as $element)
        {
            $staffs[$index][0] = $element->src;
            $index++;
        }

        return view('staff.staff', [
            'staffs' => $staffs,
            'pageNo' => $pageNo
        ]);

    }

    public function scrapingBycURL($id=1)
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'http://online.pis.gov.np/intranet/docprOnline/home/employee.php?page='.$id);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($curl);

        curl_close($curl);


        $html = new simple_html_dom();
        $html->load($response);



        $pageNo = $html->find('a[href*="/intranet/docprOnline/home/employee.php?&page="]',-2)->plaintext;

        // foreach($links as $link)
        // {
        //     echo $link->children(-1);
        // }

        // echo $value."<br>";


        // foreach($html->find('.commonNepali') as $link)
        // {
        //     foreach($link->find('tr td tr td tr td tr td') as $againLink)
        //     {
        //         echo $againLink->plaintext . "<br>";
        //     }

        //     echo "Help";

        // }

        // $text = $html->find('.commonNepali', 0)->find('tr td tr td tr td tr',0);

        // $staffs = array();
        $staffs = array();

        $datas = $html->find('.commonNepali');

        $j=0+(10*($id-1));
        foreach($datas as $data)
        {
            $i=1;
            $texts = $data->find('tr td tr td tr td tr');
            $staffs[$j] = array();

            foreach($texts as $text)
            {


                $key = html_entity_decode($text->children(0)->plaintext);
                $value = $text->children(2)->plaintext;

                $staffs[$j][$i] = html_entity_decode($value);

                // echo($i." ".$j." ".$key."=>".$staffs[$j][$i] . "<br>");

                if($i==6)
                {
                    $j++;
                    $i=0;
                }

                // else if($i==11)
                // {
                //     $j++;

                // }

                $i++;
            }

            // echo("--------------------------------<br>");

        }

        $index = 0+(10*($id-1));
        foreach($html->find('img[src*="displayPhoto.php?cd="]') as $element)
        {
            $staffs[$index][0] = $element->src;
            // echo $staffs[$index][0], "<br>";
            $index++;
        }

        // foreach($staffs as $key => $staff)
        // {
        //     foreach($staff as $value)
        //     {
        //         echo($value . " ");
        //     }
        //     echo("<br>");
        // }


        // $staffs[0] = array();
        // $staffs[0]["कर्मचारी संकेत नं."] = "१६०६६४";
        // $staffs[0]["पुरा नाम"] = "नेत्र प्रसाद सुवेदी";
        // $staffs[0]["श्रेणी/तह"] = "रा॰प॰प्रथम श्रेणी";
        // $staffs[0]["पद "] = "महा-निर्देशक";
        // $staffs[0]["टेलिफोन नं "] = "१६०६६४";
        // $staffs[0]["ई-मेल"] = "netra.prayas@gmail.com";

        // $staffs[1] = array();
        // $staffs[1]["कर्मचारी संकेत नं."] = "१६०६६४";
        // $staffs[1]["पुरा नाम"] = "नेत्र प्रसाद सुवेदी";
        // $staffs[1]["श्रेणी/तह"] = "रा॰प॰प्रथम श्रेणी";
        // $staffs[1]["पद "] = "महा-निर्देशक";
        // $staffs[1]["टेलिफोन नं "] = "१६०६६४";
        // $staffs[1]["ई-मेल"] = "netra.prayas@gmail.com";

        // $staffs[2] = array();
        // $staffs[2]["कर्मचारी संकेत नं."] = "१६०६६४";
        // $staffs[2]["पुरा नाम"] = "नेत्र प्रसाद सुवेदी";
        // $staffs[2]["श्रेणी/तह"] = "रा॰प॰प्रथम श्रेणी";
        // $staffs[2]["पद "] = "महा-निर्देशक";
        // $staffs[2]["टेलिफोन नं "] = "१६०६६४";
        // $staffs[2]["ई-मेल"] = "netra.prayas@gmail.com";



        // foreach($datas as $data)
        // {
        //     echo($data->text . "<br>");
        // }

        // $staffs = [
        //     ["१६०६६४", "नेत्र प्रसाद सुवेदी", "रा॰प॰प्रथम श्रेणी" , "महा-निर्देशक", "", "netra.prayas@gmail.com"],
        //     ["१८९५०१", "वावुराजा श्रेष्ठ", "रा॰प॰प्रथम श्रेणी" , "उप महानिर्देशक", "", "shrestha.baburaja1@gmail.com"],
        //     ["१३०३०६", "शान्ता अधिकारी भट्टराई", "रा॰प॰प्रथम श्रेणी" , "उप महानिर्देशक", "", ""]
        // ];

        // $staffs = [
        //     "0"=> [
        //         "कर्मचारी संकेत नं." => "१६०६६४",
        //         "पुरा नाम" => "नेत्र प्रसाद सुवेदी",
        //         "श्रेणी/तह" => "रा॰प॰प्रथम श्रेणी",
        //         "पद" => "महा-निर्देशक",
        //         "टेलिफोन नं" => "",
        //         "ई-मेल" => "netra.prayas@gmail.com",
        //     ],
        //     "1"=> [
        //         "कर्मचारी संकेत नं." => "१८९५०१",
        //         "पुरा नाम" => "वावुराजा श्रेष्ठ",
        //         "श्रेणी/तह" => "रा॰प॰प्रथम श्रेणी",
        //         "पद" => "उप महानिर्देशक",
        //         "टेलिफोन नं" => "",
        //         "ई-मेल" => "shrestha.baburaja1@gmail.com",
        //     ],
        //     "2"=> [
        //         "कर्मचारी संकेत नं." => "१३०३०६",
        //         "पुरा नाम" => "शान्ता अधिकारी भट्टराई",
        //         "श्रेणी/तह" => "रा॰प॰प्रथम श्रेणी",
        //         "पद" => "उप महानिर्देशक",
        //         "टेलिफोन नं" => "",
        //         "ई-मेल" => "netra.prayas@gmail.com",
        //     ],
        // ];

        return view('staff', [
            'staffs' => $staffs,
            'pageNo' => $pageNo
        ]);

    }
}
