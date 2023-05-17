
      function clearForm() {
        var form = document.getElementById("my-form");
        var inputs = form.getElementsByTagName("input");
        for (var i = 0; i < inputs.length; i++) {
          if (inputs[i].type == "text") {
            inputs[i].value = "";
          }
        }
        var textarea = form.getElementsByTagName("textarea")[0];
        textarea.value = "";
      }
    