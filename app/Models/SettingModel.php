<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettingModel extends Model
{
    use HasFactory;
    protected $table = 'settings'; // Nama tabel dalam database

    protected $fillable = [
        'type','title','keyword','value','description',
    ];

    public $timestamps = false; 

    public function socialLink($id){
        $link = $this->find($id);
        $link_urls = [
            'facebook' => ['url' => 'https://web.facebook.com/', 'icon' => 'fab fa-facebook', 'style' => 'background-color: #1877F2; border-color: #1877F2;'],
            'twitter' => ['url' => 'https://twitter.com/', 'icon' => 'fab fa-twitter', 'style' => 'background-color: #1DA1F2; border-color: #1DA1F2;'],
            'instagram' => ['url' => 'https://instagram.com/', 'icon' => 'fab fa-instagram', 'style' => 'background-color: #E4405F; border-color: #E4405F;'],
            'youtube' => ['url' => 'https://youtube.com/', 'icon' => 'fab fa-youtube', 'style' => 'background-color: #CD201F; border-color: #CD201F;'],
            'discord' => ['url' => 'https://discord.com/invite/', 'icon' => 'fab fa-discord', 'style' => 'background-color: var(--bs-purple); border-color: var(--bs-purple);'],
        ];
        
        $keyword = $link?->keyword;
        $value = $link?->value;
        $socmed = $link_urls[$keyword] ?? [];
        $link_url = $socmed['url'] ?? '';
        $icon = $socmed['icon'] ?? '';
        $style = $socmed['style'] ?? '';

        $output = '
                    <a href="' . $link_url . $value .'" target="_blank" class="rounded-4 btn btn-lg btn-primary d-flex justify-content-center align-content-center align-items-center" style="'.$style.'">
                        <i class="'.$icon.' size5"></i> <span class="size5 p-1 mb-1">' . $value .'</span>
                    </a>';

        return $output;
    }

    public function socialLinks()
    {
        $socmeds = $this->where('value','!=','')->get();
        $output = '';

        foreach($socmeds as $i => $s)
        {
            $output .= $this->socialLink($s->id);
        }

        return $output;
    }
}
