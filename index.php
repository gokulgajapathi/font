<?php

/*

Plugin Name:font
*/
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <!-- <script src="script.js"></script> -->
    <title>Document</title>
    <style>
body {
  display: inline-flex;
  gap: 30px;
}
#image1 {
  width: 375px;
  height: 211px;
  border: 1px solid black;
  background-size: cover;
}

#image2 {
  width: 375px;
  height: 211px;
  border: 1px solid black;
  background-size: cover;
}
label {
  border: 1px solid black;
  background-color: orange;
  color: white;
  display: block;
  width: max-content;
}
img {
  display: block;
}
section {
  margin-left: 30px;
}
</style>
  </head>
  <body>
    <section id="reference">
      <p>
        <img id="image1" />
      </p>

      <input
        type="file"
        accept="image/*"
        name="image"
        id="file1"
        onchange="loadFile1(event)"
        style="display: none"
      />
      <label for="file1" style="cursor: pointer">Reference Image</label><br />

      <label for="file1" style="cursor: pointer"
        >Re-Upload Reference Image</label
      >
    </section>

    <section id="comparision">
      <p>
        <img id="image2" />
      </p>

      <p>
        <input
          type="file"
          accept="image/*"
          name="image"
          id="file2"
          onchange="loadFile2(event)"
          style="display: none"
        />
      </p>

      <p>
        <label for="file2" style="cursor: pointer"
          >Upload Comparision Image</label
        ><br />
        <label for="file2" style="cursor: pointer"
          >Re-Upload Comparision Image</label
        >
      </p>
    </section>
    <script>
      var loadFile1 = function (event) {
  var image = document.getElementById("image1");
  image.src = URL.createObjectURL(event.target.files[0]);
};
var loadFile2 = function (event) {
  var image = document.getElementById("image2");
  image.src = URL.createObjectURL(event.target.files[0]);
};
</script>
  </body>
</html>
