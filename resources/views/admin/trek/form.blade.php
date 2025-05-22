<div class="row">
    <div class="col-md-6 form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="{{$trek->name ?? ''}}">
    </div>

    <div class="col-md-6 form-group">
        <label for="location">Location</label>
        <select class="form-control" id="location" name="location">
            <option value="" disabled selected>Select location</option>
            @foreach($locations as $location)
                <option value="{{$location->id}}" {{ (isset($trek) && $trek->location == $location->id) ? 'selected' : '' }}>{{$location->name}}</option>
            @endforeach
            <!-- Add more options as needed -->
        </select>
    </div>
</div>

<div class="row">
    <div class="col-md-6 form-group">
        <label for="price">Price</label>
        <input type="number" step="0.01" class="form-control" id="price" name="price" placeholder="Enter price" value="{{$trek->price ?? ''}}">
    </div>

    <div class="col-md-6 form-group">
        <label for="rating">Rating</label>
        <input type="number" class="form-control" id="rating" name="rating" placeholder="Enter rating" value="{{$trek->rating ?? ''}}">
    </div>
</div>

<div class="row">
    <div class="col-md-6 form-group">
        <label for="review_count">Review Count</label>
        <input type="number" class="form-control" id="review_count" name="review_count" placeholder="Enter review count" value="{{$trek->review_count ?? ''}}">
    </div>

    <div class="col-md-6 form-group">
        <label for="duration">Duration</label>
        <input type="text" class="form-control" id="duration" name="duration" placeholder="Enter duration" value="{{$trek->duration ?? ''}}">
    </div>
</div>

<div class="row">
    <div class="col-md-6 form-group">
        <label for="max_group_size">Max Group Size</label>
        <input type="number" class="form-control" id="max_group_size" name="max_group_size" placeholder="Enter max group size" value="{{$trek->max_group_size ?? ''}}">
    </div>

    <div class="col-md-6 form-group">
        <label for="difficulty">Difficulty</label>
        <input type="text" class="form-control" id="difficulty" name="difficulty" placeholder="Enter difficulty"  value="{{$trek->difficulty ?? ''}}">
    </div>
</div>
