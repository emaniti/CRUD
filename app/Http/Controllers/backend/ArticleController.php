<?php

namespace App\Http\Controllers\backend;

use App\Models\Article;
use App\Models\ArticleImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreArticleRequest;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::paginate(10);
        return view('backend.pages.article.index', compact(['articles']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.article.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArticleRequest $request)
    {
        //check inputs validation
        $validated = $request->validated();
        if ($request->hasFile('main_image')) {
            $imageName = time().'.'.$request->main_image->extension();
            $request->main_image->storeAs('articles', $imageName, 'public');
            $validated['main_image'] = 'storage/articles/'.$imageName;
        }
        $validated['content']=$request->input('content');


        if ($article=Article::create($validated)) {
            //============ if article created add extra uploaded image ..
           $validated2 = $request->validated();
                $files = [];
                if ($request->file('images')){
                    foreach($request->file('images') as $key => $file)
                    {
                        $file_name = time().rand(1,99).'.'.$file->extension();
                        $file->move(public_path('storage/articles/'), $file_name);
                        $validated2['image_name'] = 'storage/articles/'.$file_name;
                        $validated2['article_id']=$article->id;
                        ArticleImage::create($validated2);
                    }
                }

            return redirect('admin/dashboard/article')->with('message', 'Article Created successfully!');
        } else {
            return redirect('admin/dashboard/article')->with('error', 'Opps something went wrong please try again!');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('backend.pages.article.form', compact(['article']));
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
        $request->validate([
            'title' => 'required|max:255|min:5',
            'main_image' => 'nullable|image|max:2048'
        ]);
        $article = Article::findOrFail($id);
        $article->title = $request->title;
        $article->content = $request->content;

        if ($request->hasFile('main_image')) {
            if (file_exists($article->main_image)) {
                unlink($article->main_image);
            }
            $imageName = time().'.'.$request->main_image->extension();
            $request->main_image->storeAs('articles', $imageName, 'public');
            $article->main_image = 'storage/articles/'.$imageName;
        }
        if ($article->save()) {
            return redirect('admin/dashboard/article')->with('message', 'Article Updated successfully!');
        } else {
            return redirect('admin/dashboard/article')->with('error', 'Opps something went wrong please try again!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article= Article::findOrFail($id);
       try {

        $article_images=ArticleImage::where('article_id', $id)->distinct()->get();
        //---------------------->>>> use this lines to remove image premetelly if you not use softDelete========
        //===================================================================================
        //@unlink($article->main_image); // delete the main image from uploaded folder
          /*  foreach($article_images as $article_image){ // delete the realated images for the article
                @unlink($article_image->image_name);
            }
            */
            $article->getArticleImages()->delete();   // deleted all images related to article @ DB
            $article->delete();                       // delete article
            return redirect('admin/dashboard/article')->with('message', 'Article and images Deleted successfully!');

        } catch (\Exception $ex) {
            return redirect('admin/dashboard/article')->with('error', $ex.'Its Not easy to delete Article !');
        }
    }

    public function transferImage($id)
    {
        $article = Article::findOrFail($id);
        $article_images= $article->getArticleImages();
        $Allarticles= Article::all()->except($id);
        return view('backend.pages.article.transfer',compact('article','Allarticles'));
    }

    public function store_transferImage(Request $request)
    {
        $request->validate([
            'new_article_id' => 'required|not_in:0'
        ]);
        $article = Article::findOrFail($request->id);
        $article_images= $article->getArticleImages();
         // update article id with the new selected one :)
        $article_images->update([
            'article_id' => $request->new_article_id,
        ]);
        $article->delete(); // delete the article.
        return redirect('admin/dashboard/article')->with('message', 'Article deleted successfully!');
    }


}
