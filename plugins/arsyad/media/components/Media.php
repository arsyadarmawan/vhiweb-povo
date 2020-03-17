<?php namespace Arsyad\Media\Components;
use Flash;
use Input;
use Redirect;
use Cms\Classes\ComponentBase;
use System\Models\File as File;
use Arsyad\Media\Models\Media as MediaModels;

class Media extends ComponentBase
{
    public function init()
    {
        $component = $this->addComponent(
            'Responsiv\Uploader\Components\FileUploader',
            'fileUploader',
            ['deferredBinding' => false]
        );

        $component->bindModel('galleries', new MediaModels);
    }

    public function onRefreshFiles()
    {
        $this->pageCycle();
    }

    public function componentDetails()
    {
        return [
            'name'        => 'Media Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRegistMedia()
    {

        $file = new File;
        $file->data = Input::file('galleries');
        $file->is_public = true;
        $file->save();
        $media = new MediaModels;
        $media->title = post('title');
        $media->description = post('description');
        $media->galleries()->add($file);
        $media->user_id = post('user_id');
        $media->file_path = $file->getPath();
        $media->save(null, post('_session_key'));
        Flash::success('Berhasil menambahkan media');
        return Redirect::refresh();
    }

    public function getMedia($id){

        $media = MediaModels::where('user_id', '=', $id)->get();
        return $media;
    }

    public function paginate(){
        return MediaModels::paginate(5);
    }
    
    public function getCurrent()
    {
        return MediaModels::whereSlug($this->property('parameter'))->first();
    }


    
}
