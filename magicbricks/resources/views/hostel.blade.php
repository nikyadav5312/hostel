@extends('layout')

@section('content')

<div class="container d-flex justify-content-center align-items-center mt-5">
    <div class="w-75">
        <h2 class="mb-4 text-center">Property Listing Form</h2>

        
        <form action=" " method="post">
            @csrf


            <div class="mb-3">
                <label for="type" class="form-label">Type*</label>
                <select name="type" class="form-select" id="type" required>
                    <option value="" hidden>Select..</option>
                    <option value="Apartments">Apartments</option>
                    <option value="Builder Floors">Builder Floors</option>
                    <option value="Houses & Villas">Houses & Villas</option>
                </select>
                @error('Type')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="bedrooms" class="form-label">Bedrooms</label>
                <select name="bedrooms" class="form-select" id="bedrooms" required>
                    <option value="" hidden>Select..</option>
                    <option value="1-BHK">1</option>
                    <option value="2-BHK">2</option>
                    <option value="3-BHK">3</option>
                    <option value="4-BHK">4+</option>
                </select>
                @error('bedrooms')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>


            <div class="mb-3">
                <label for="bathrooms" class="form-label">Bathrooms</label>
                <select name="bathrooms" class="form-select" id="bathrooms" required>
                    <option value="" hidden>Select..</option>
                    <option value="1Bath">1</option>
                    <option value="2Bath">2</option>
                    <option value="3Bath">3</option>
                    <option value="4Bath">4+</option>
                </select>
                @error('bathrooms')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>


            <div class="mb-3">
                <label for="furnished" class="form-label">Furnished</label>
                <select name="furnished" class="form-select" id="furnished" required>
                    <option value="" hidden>Select..</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
                @error('furnished')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="listed_by" class="form-label">Listed by</label>
                <select name="listed_by" class="form-select" id="listed_by" required>
                    <option value="" hidden>Select..</option>
                    <option value="Builder">Builder</option>
                    <option value="Dealer">Dealer</option>
                    <option value="Owner">Owner</option>
                </select>
                @error('listed_by')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="builtup_area" class="form-label">Built-up Area (sq ft)</label>
                <input type="number" name="builtup_area" class="form-control" id="builtup_area" placeholder="Enter built-up area" required>
                @error('builtup_area')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="carpet_area" class="form-label">Carpet Area (sq ft)</label>
                <input type="number" name="carpet_area" class="form-control" id="carpet_area" placeholder="Enter carpet area" required>
                @error('carpet_area')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="bachelors" class="form-label">Bachelors Allowed</label>
                <select name="bachelors" class="form-select" id="bachelors" required>
                    <option value="" hidden>Select..</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
                @error('bachelors')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="floors" class="form-label">Total Floors</label>
                <input type="number" name="floors" class="form-control" id="floors" placeholder="Enter total floors" required>
                @error('floors')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="floor_no" class="form-label">Floor Number</label>
                <input type="number" name="floor_no" class="form-control" id="floor_no" placeholder="Enter your floor number" required>
                @error('floor_no')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="carparking" class="form-label">Car Parking</label>
                <select name="carparking" class="form-select" id="carparking" required>
                    <option value="" hidden>Select..</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
                @error('carparking')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label"> Phone</label>
                <input name="phone" class="form-select" id="phone" required>
 
                @error('phone')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <select name="address" class="form-select" id="address" required>
                    <option value="" hidden>Select..</option>
                    <option value="Lucknow">Lucknow</option>
                    <option value="Azamgarh">Azamgarh</option>
                </select>
                @error('address')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">price</label>
                <input name="price" class="form-select" id="price" required>
                @error('price')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="project_name" class="form-label">Project Name</label>
                <input type="text" name="project_name" class="form-control" id="project_name" placeholder="Enter project name" required>
                @error('project_name')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
          
            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
    </div>
</div>

@endsection