<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\homemodel;
use App\Models\PageModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Storage;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $page = PageModel::where("slug","home")->first();
        return view('frontend.templates.home',compact('page'));
    }


    public function _index()
    {


        $json = file_get_contents(public_path('trello.json'));
        $json = json_decode($json, true);

        $cards = $json['cards'];
        $cards_out = [];

        foreach($cards as $i => $c)
        {
            //if(isset($c['idLabels']) and is_array($c['idLabels']) and count($c['idLabels']) > 0)
            if(isset($c['idLabels']) and is_array($c['idLabels']) and count($c['idLabels']) > 0)
            {}else{
                continue;
            }
            if(empty($c['due']) or strpos($c['name'], 'CANCEL') !== false)
                continue;

            $tmp = [
                'name' => $c['name'],
                'closed' => $c['closed'],
                'dueComplete' => $c['dueComplete'],
                'desc' => $c['desc'],
                'labels' => $c['labels'],
                'start' => $c['start'],
                'due' => $c['due'],
                'dateLastActivity' => $c['dateLastActivity']
            ];
            $cards_out[] = $tmp;
        }

        $out = [];

        foreach($cards_out as $i => $co)
        {
            $tmp = $co;
            foreach($co['labels'] as $o => $c)
            {
                $tmp['artist_name'] = $c['name'];
                $tmp['artist_color'] = $c['color'];
                unset($tmp['labels']);
                $out[] = $tmp;

                echo '"' . implode('";"',$tmp) . '"' ."\n";
            }
        }
        exit;
        //echo "<pre>";
        //print_r($out);
        //exit;
        //return $this->toTable($out);
        //print_r($json);
        //exit;

        $page = PageModel::where("slug","home")->first();
        return view('frontend.templates.home',compact('page'));
    }
    public function toTable($data)
    {
        $output = '';
        $head = [];
        $rows = [];
        $cards = [];

        foreach($data as $i => $d)
        {
            if(in_array($i,['actions','limits']))
                continue;

            if(is_array($d))
            {
                $d = $this->toTable($d);
            }
            
            $head[] = '<th valign="top">'.$i.'</th>';
            $rows[] = '<td valign="top">'.$d.'</td>';
            //$head[] = '<th valign="top">'.$i.'</th>';
            //$rows[] = '<tr><td valign="top">'.$i.' : </td><td valign="top">'.$d.'</td></tr>';
        }

        $output = '<table border="1"><tr>'.implode('',$head).'</tr><tr>'.implode('',$rows).'</tr></table>';
        //$output = '<table border="1"><tr>'.implode('',$rows).'</tr></table>';
        return $output;
    }
}
