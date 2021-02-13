$houses = House::whereHas('users', function ($query) {
    $query->where('name', 'some user name'); // to add some conditions on the user :)
})->get();


$houses = House::with('users')->get();


$shop = Shop::find($shop_id);
$shop->products()->attach($product_id);

The result – a new row will be added to product_shop table, with $product_id and $shop_id values.

Likewise, we can detach a relationship – let’s say, we want to remove a product from the shop:

$shop->products()->detach($product_id);
Or, more brutally, remove all products from a particular shop – then just call method without parameters:

$shop->products()->detach();
You can also attach and detach rows, passing array of values as parameters:

$shop->products()->attach([123, 456, 789]);
$shop->products()->detach([321, 654, 987]);
And another REALLY useful function, in my experience, is updating the whole pivot table. Really often example – in your admin area there are checkboxes for shops for a particular product, and on Update operation you actually have to check all shops, delete those which are not in new checkbox array, and then add/update existing ones. Pain in the neck.

Not anymore – there’s a method called sync() which accept new values as parameters array, and then takes care of all that “dirty work” of syncing:

$product->shops()->sync([1, 2, 3]);
Result – no matter what values were in product_shop table before, after this call there will be only three rows with shop_id equals 1, 2, or 3.












2

You're right about the pivot table. It must contain 3 keys, as in this situation tags can't exist without a user or a track. So it's a relationship between 3 models.

So here's all you need (I'm skipping artist and album relations ofc):

// pivot table tag_track_user: tag_id, track_id, user_id, id, timestamps

// Tag model
public function users()
{
    // by default only 2 keys are on the pivot, so lets add the third
    return $this->belongsToMany('User', 'tag_track_user')->withPivot('track_id'); 
}

public function tracks()
{
    return $this->belongsToMany('Track', 'tag_track_user')->withPivot('user_id'); 
}
------------
// Track model
public function tags()
{
    return $this->belongsToMany('Tag', 'tag_track_user')->withPivot('user_id'); 
}

public function users()
{
    return $this->belongsToMany('User', 'tag_track_user')->withPivot('tag_id'); 
}
------------
// User model
public function tags()
{
    return $this->belongsToMany('Tag', 'tag_track_user')->withPivot('track_id');
}

public function tracks()
{
    return $this->belongsToMany('Track', 'tag_track_user')->withPivot('tag_id'); 
}
Now, with this setup you can get everything you want:

$user->tags->first()->users; // other users who used given tag
Tag::where('name','happy')->first()->tracks; // all tracks tagged 'happy'
$user->tracks()->where('title','Happy')->first()->tags; // all tags attached to song Happy
$user->tags->load('tracks')->fetch('tracks')->collapse(); // array of all the tracks related to all tags of a user (as arrays not models)
etc.










public function courses() {
        return $this->belongsToMany('Course', 'course_student', 'course_id', 'student_id');
    }

    public function students() {
        return $this->belongsToMany('Student', 'course_student', 'course_id', 'student_id');
    }   