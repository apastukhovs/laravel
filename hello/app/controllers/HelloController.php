<?php

class HelloController extends BaseController
{
    public function showHello()
    {
        $name = Input::old('name');
        $list = array (
            'About' => '/about',
                'Content Us' => '/contact',
                'Terms of conditions' => '/tos'
            );
            return View::make('hello2', array('name'=>$name, 'urls' => null));
    }

    public function showForm()
    {
        return View::make('form');
    }    

    public function postSubmit() 
    {   
        if(Input::has('name'))
        {
            
            return Redirect::action('HelloController@showHello')->withInput();
        }
        return Redirect::route('form');
    }    

    public function dbTest($id)
    {
        //$user = DB::table('users')->where('id', '=' , $id)->select('emeil')->get();
        $artist = Artist::find($id);
        var_dump($artist->tracks);
        $albums = $artist->albums;
        foreach($albums as $album)
        {
            echo $album->Title . ' (' . $album->artist->Name . ')';
            echo '</br>';
            $tracks = $album->tracks;
            foreach($tracks as $track)
            {
                echo ' - ' . $track->Name . ' (' . $track->album->Title .')';
                echo '<br/>';
            }
        }

        //return View::make('songlist', compact('tracks'));
    }
}
