namespace App\Http\Controllers;

use App\news;
use Illuminate\Http\Request;

class NewsController extends Controller
{

public function get_all_news(){
$all_news = news::all();
//$all_news = news:: select('title','content')->get();
//$all_news = news::paginate(2);
//$all_news = news::orderBy('id','desc')->grt();
$all_news = news::onlyTrashed()-> orderBy('id','asc')->paginate(3);
//$all_news = news::withTrashed()-> orderBy('id','asc')->paginate(3);
$all_news = news::withoutTrashed()-> orderBy('id','asc')->paginate(3);


return view('all_news',compact('all_news'));
}


public function get_news(){

$news_id= \request("news_id");
//return 'hello'.$a;
//$row = news::find($news_id);
//dd($row);
$row = news::where("disc",$news_id)->get();
//$row = news::where("disc",$news_id)->first();
//$row = news::firstwhere("disc",$news_id);
dd($row);

return view("news",compact("row"));

}

public function add_news(){
$this->validate(\request(),[
'title'=>'required',
'disc'=>'required',
'content'=>'required',
'add_by'=>'required',
'stutus'=>'required',



],[
'required'=>'هاذا الحقل مطلوب  (: attribute )'
],[
'title'=>'News Title',
'disc'=>'Description',
'content'=>'Content News',
'add_by'=>'User',
'stutus'=>'News status',

]
);

news::create(['title'=>\request()->title,'disc'=>\request()->disc,'content'=>\request()->contents,'add_by'=>\request()->add_by,'stutus'=>\request()->stutus]);
//return "Done";
// return redirect(route('all_news'));
return back();
//$data = \request()->all();
//dd($data);
//$add = new news();
//$add->title = \request()->title;
//$add->disc = \request()->disc;
//$add->content= \request()->contents;
//$add->add_by = \request()->add_by;
//$add->stutus = \request()->stutus;
//$add->save();




}

public function delete_news($id){
//return $id;
$news_obj=news::find($id);
//dd($news_obj);
$news_obj->delete();
return back();

}

public function soft_delete_news($id){
news::destroy($id);

}
}
