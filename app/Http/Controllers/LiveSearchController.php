<?php

namespace App\Http\Controllers;
use App\LiveSearch;
use App\Project;
use App\ProjectCategory;
use App\Teammember;
use App\Post;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LiveSearchController extends Controller{
  public function search(Request $request){
  	if($request->ajax()){
        $output = [];
        $jstmems = "";
        $jsps = "";
        $jsnews = "";
        $jscats = "";

        $filters = "";

        $ps=Project::whereTranslation('name', 'like', '%' . $request->search . '%', ['uz', 'ru', 'en'])->get();
        $tmems=Teammember::whereTranslation('name', 'like', '%' . $request->search . '%', ['uz', 'ru', 'en'])->get();
        $posts=Post::whereTranslation('title', 'like', '%' . $request->search . '%', ['uz', 'ru', 'en'])->get();
        $pcats=ProjectCategory::whereTranslation('name', 'like', '%' . $request->search . '%', ['uz', 'ru', 'en'])->get();
        // $ps[]=ProjectCategory::whereTranslation('name', 'like', '%' . $request->search . '%', ['uz', 'ru', 'en'])->get();

        if ($ps || $tmems || $posts || $pcats) {

          $filters .='
           
          ';
        }else{$filters = "";}
       
        if ($ps) {
        
            foreach ($ps as $p) {
               $jsps.='
                   <div class="col-md-6 sos-img partners all">
                        <div id="spinner"></div>
                        <a href="/show-all-projects/'.$p->slug.'">
                        <img class="proj-img " src="https://art-mb.uz/storage/'.$p->img.'" id="loaded-img">
                        <div class="img-cap">
                          <h6>'.$p->location.'</h6>
                          <h4>'.$p->name.'</h4>
                        </div>
                        </a>
                    </div>
               ';
            } 
        }else{$jsps.='<div class="col-md-6 sos-img  partners all">no projects</div>';} 

        if ($posts) {
      
          foreach ($posts as $p) {
             $jsnews.='
                 <div class="col-md-6 sos-img news all">
                      <div id="spinner"></div>
                      <a href="/news/'.$p->slug.'">
                      <img class="proj-img " src="https://art-mb.uz/storage/'.$p->img.'" id="loaded-img">
                      <div class="img-cap">
                        <h6>'.$p->location.'</h6>
                        <h4>'.$p->title.'</h4>
                      </div>
                      </a>
                  </div>
             ';
         } 
        }else{$jsnews.='<div class="col-md-6 sos-img news all">no news</div>';}

        if ($pcats) {
      
          foreach ($pcats as $p) {
             $jscats.='
                 <div class="col-md-6 sos-img cats all">
                      <div id="spinner"></div>
                      <a href="/expertise/'.$p->slug.'">
                      <img class="proj-img " src="https://art-mb.uz/storage/'.$p->img.'" id="loaded-img">
                      <div class="img-cap">
                        <h6>'.$p->location.'</h6>
                        <h4>'.$p->name.'</h4>
                      </div>
                      </a>
                  </div>
             ';
          } 
        }else{$jscats.='<div class="col-md-6 sos-img cats all">no cats</div>';}

        if ($tmems) {
          foreach ($tmems as $t) {
             $jstmems.='
                 <div class="team-member col-sm-6 my-grid-col all">
                  <a href="studio/'.$t->slug.'">
                  <div class="row content container-search-team-img">
                    <div class="col-md-6 info">
                      <h4>'.$t->name.'</h4>
                      <h6>'.$t->position.'</h6>
                    </div>
                    <div class="col-md-6">
                      <img class="search-team-img" src="https://art-mb.uz/storage/'.$t->img.'" id="loaded-img">
                    </div>
                  </div>
                  </a>
                </div>
             ';
          }
        }else{$jstmems.='<div class="col-md-6 sos-img team-member all">no team members</div>';} 

        return response()->json(["jsfilters"=>$filters, "jstmems" => $jstmems, "jsps" => $jsps, "jsnews"=>$jsnews, "jscats"=>$jscats]);    
    }
  }


 public function acomplete(Request $request){
    if($request->ajax()){
        $output = [];
        $jstmems = "";
        $jsps = "";
        $jsnews = "";
        $jscats = "";

        $filters = "";

        $ps=Project::whereTranslation('name', 'like', '%' . $request->search . '%', ['uz', 'ru', 'en'])->get();
        $tmems=Teammember::whereTranslation('name', 'like', '%' . $request->search . '%', ['uz', 'ru', 'en'])->get();
        $posts=Post::whereTranslation('title', 'like', '%' . $request->search . '%', ['uz', 'ru', 'en'])->get();
        $pcats=ProjectCategory::whereTranslation('name', 'like', '%' . $request->search . '%', ['uz', 'ru', 'en'])->get();
       
        if ($ps) {
        
            foreach ($ps as $p) {
               $jsps.='
                  <div><a href="/show-all-projects/'.$p->slug.'">'.$p->name.'</a></div> 
               ';
            } 
        } 

        if ($posts) {
      
          foreach ($posts as $p) {
             $jsnews.='
                  <div><a href="/news/'.$p->slug.'">'.$p->title.'</a></div> 
               ';
         } 
        }

        if ($pcats) {
      
          foreach ($pcats as $p) {
             $jscats.='
                  <div><a href="/expertise/'.$p->slug.'">'.$p->name.'</a></div> 
               ';
          } 
        }
        if ($tmems) {
          foreach ($tmems as $t) {
             $jstmems.='
                  <div><a href="/studio/'.$t->slug.'">'.$t->name.'</a></div> 
               ';
          }
        }
        return response()->json(["jsfilters"=>$filters, "jstmems" => $jstmems, "jsps" => $jsps, "jsnews"=>$jsnews, "jscats"=>$jscats]);    
    }
  }



}