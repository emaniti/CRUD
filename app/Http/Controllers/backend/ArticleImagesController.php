<?php

namespace App\Http\Controllers\backend;

use App\Models\Article;
use App\Models\ArticleImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreImagesArticleRequest;

class ArticleImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles_images = ArticleImage::paginate(10);
        return view('backend.pages.article_gallery.index', compact(['articles_images']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Allarticles= Article::all();
        return view('backend.pages.article_gallery.form',compact('Allarticles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreImagesArticleRequest $request)
    {
        //check inputs validation
        $validated = $request->validated();

            //============ if article created add extra uploaded image ..

                $files = [];
                if ($request->file('images')){
                    foreach($request->file('images') as $key => $file)
                    {
                        $file_name = time().rand(1,99).'.'.$file->extension();
                        $file->move(public_path('storage/articles/'), $file_name);
                        $validated['image_name'] = 'storage/articles/'.$file_name;
                        $validated['article_id']=$request->input('article_id');
                        ArticleImage::create($validated);
                    }


            return redirect('admin/dashboard/articleImages')->with('message', 'Article images Created successfully!');
        } else {
            return redirect('admin/dashboard/articleImages')->with('error', 'Opps something went wrong please try again!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article_image= ArticleImage::findOrFail($id);
        try {

                $article_image->delete();                       // delete article image "SoftDelete"
                return redirect('admin/dashboard/articleImages')->with('message', 'Article image Deleted successfully!');

            } catch (\Exception $ex) {
                return redirect('admin/dashboard/articleImages')->with('error', $ex.'Its Not easy to delete this !');
            }
    }
}
