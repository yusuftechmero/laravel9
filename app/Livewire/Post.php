<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post as Posts;
use Livewire\WithPagination;

class Post extends Component
{
    use WithPagination;

    public $title, $description, $postId, $updatePost = false, $addPost = false;

    public $search = '';
    
    protected $listeners = [
        'deletePostListner' => 'deletePost'
    ];

    protected $rules = [
        'title' => 'required',
        'description' => 'required'
    ];

    public function resetFields() {
        $this->title = '';
        $this->description = '';
    }

    public function render()
    {

        $posts = Posts::select('id', 'title', 'description')->paginate(2);
        return view('livewire.post',['posts' => $posts]);
    }

    public function addPostData() {
        // dd('Yusuf');
        $this->resetFields();
        $this->addPost = true;
        $this->updatePost = false;
    }

    public function storePost() {
        
        $this->validate();

        try {
            Posts::create([
                'title' => $this->title,
                'description' => $this->description
            ]);

            $this->addPost = false;
            $this->resetFields();
            session()->flash('success', 'Post added successfully!');
            
        } catch(\Exception $e) {
            
            session()->flash('error', 'Something went wrong');
        }
    }
    
    public function editPost($id) {
        
        try {
            if(!$post = Posts::findOrFail($id)) {
                session()->flash('error', 'Post not found');
            }
            
            $this->title = $post->title;
            $this->description = $post->description;
            $this->postId = $post->id;
            $this->updatePost = true;
            $this->addPost = false;
            
        } catch(\Exception $e) {
            session()->flash('error', 'Something went wrong');
        }
    }
    
    public function updatePostData() {
        $this->validate();
        try {
            Posts::whereId($this->postId)->update(
                [
                    'title' => $this->title,
                    'description' => $this->description
                    ]
                );
                $this->resetFields();
                $this->postId = '';
                $this->updatePost = false;
                session()->flash('success', 'Post updated successfully!');
            } catch(\Exception $e) {
                session()->flash('error', 'Something went wrong');
            }
        }
        
        public function cancelPost() {
            $this->resetFields();
            $this->updatePost = false;
            $this->addPost = false;
        }
        
        public function deletePost($id) {
            try {
                Posts::whereId($id)->delete();
                session()->flash('success', 'Post deleted successfully!');
        } catch(\Exception $e) {
            session()->flash('error', 'Something went wrong');
        }
        
    }
    public function updatingSearch() {
        $this->resetPage();
    }
}
