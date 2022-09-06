<?php

namespace App\Policies;

use App\Models\BlogPost;
use App\Models\User;
use App\Models\Author;
use Illuminate\Auth\Access\HandlesAuthorization;

class BlogPostPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, BlogPost $blogPost)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(Author $author)
    {
        return $author->is_authorized === 1 ;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(Author $user, BlogPost $blogPost)
    {
        return $user->id === $blogPost->author_id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(Author $user, BlogPost $blogPost)
    {
        return $user->id === $blogPost->author_id;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, BlogPost $blogPost)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, BlogPost $blogPost)
    {
        //
    }

    public function play(Author $author,$id) {
        return true;
        return  $author->id === $id;
        //    return 'You Are Right';
        // return 'You Are Not Right';
    }
}
