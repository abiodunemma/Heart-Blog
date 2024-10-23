<form action="#" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="quote">Quote:</label>
        <input type="hinden" name="userid" id="userid" required>

        {{--  <div>
            <label for="image">Upload Image:</label>
            <input type="file" name="image" id="image">
        </div>  --}}

        <input type="text" name="quote" id="quote" required>
    </div>


    <button type="submit">Save Quote</button>
</form>
