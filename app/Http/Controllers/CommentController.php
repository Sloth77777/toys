<?php
//
//namespace App\Http\Controllers;
//
//use App\Http\Requests\Comment\CommentProductRequest;
//use App\Models\Comment;
//use App\Models\Product;
//use App\Modules\Web\Controllers\Controller;
//use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Http\Request;
//use Illuminate\View\View;
//
//class CommentController extends Controller
//{
//    use HasFactory;
//
//    /**
//     * Display a listing of the resource.
//     */
//
//    public function index(): View
//    {
//        $comments = Comment::all()->sortByDesc('created_at');
//        return view('main.home.comment', compact('comments'));
//    }
//
//
//    /**
//     * Show the form for creating a new resource.
//     */
//    public function create()
//    {
//    }
//
//    /**
//     * Store a newly created resource in storage.
//     */
//    public function store(CommentProductRequest $request, $product_id)
//    {
//        $data = $request->validated();
//
//        Comment::create([
//            'message' => $data['message'],
//            'product_id' => $product_id,
//            'user_id' => auth()->id(),
//        ]);
//
//        return redirect()->route('main.home.product.show', $product_id);
//    }
//
//
//    /**
//     * Display the specified resource.
//     */
//    public function show($product_id)
//    {
//        $product = Product::findOrFail($product_id);
//        $comments = Comment::where('product_id', $product_id)->sortByDesc('created_at')->get();
//
//        return view('main.home.comment', compact('comments', 'product'));
//    }
//
//    /**
//     * Show the form for editing the specified resource.
//     */
//    public function edit(string $id)
//    {
//        //
//    }
//
//    /**
//     * Update the specified resource in storage.
//     */
//    public function update(Request $request, string $id)
//    {
//    }
//
//    /**
//     * Remove the specified resource from storage.
//     */
//    public function destroy(Comment $comment)
//    {
//        $comment->delete();
//        return redirect()->back();
//    }
//}
