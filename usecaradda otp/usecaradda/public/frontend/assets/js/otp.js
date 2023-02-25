let inputVal = [];

    const isKeyInput = (e) => {
      // exclude backspace, tab, shift, ctrl, alt, esc and arrow keys
      return (
        [8, 9, 16, 17, 18, 27, 37, 38, 39, 40, 46].indexOf(e.which) === -1
      );
    };

    const isNumberInput = (e) => {
      var charKey = e.key;
      return !isNaN(charKey) || charKey.toLowerCase() === "backspace";
    };

    const autotab = (e, currentPosition, to) => {
      const currentElement = e.currentTarget;
      // if (currentElement.type === "number" && !isNumberInput(e)) {
      //   e.preventDefault();
      //   return;
      // }
      if (
        isKeyInput(e) &&
        currentElement.getAttribute &&
        !e.ctrlKey &&
        currentElement.value.length >=
          currentElement.getAttribute("maxlength")
      ) {
        if (to) {
          const elem = document.getElementById(to);
          if (elem) {
            elem.focus();
            elem.select();
          }
        }
      }
      inputVal[currentPosition] = currentElement.value;
    };

    const keydownHandler = (e, prefix, currentPosition) => {
      const currentElement = e.currentTarget;
      if (e.which === 8 && currentElement.value.length === 0) {
        // go to previous input when backspace is pressed
        const elem = document.getElementById(
          `${prefix}${currentPosition - 1}`
        );
        if (elem) {
          elem.focus();
          elem.select();
          e.preventDefault();
          return;
        }
      }
      // only allows numbers (prevents e, +, - on input number type)
      if (
        // currentElement.type === "number" &&
        e.which === 69 ||
        e.which === 187 ||
        e.which === 189 ||
        e.which === 190 ||
        !isNumberInput(e)
      ) {
        e.preventDefault();
        return;
      }
    };

    const pasteHandler = (e, prefix, currentPosition) => {
      const clipboardData = e.clipboardData || window.clipboardData;
      const pastedData = clipboardData.getData("Text");
      let inputPos = currentPosition;
      let strIndex = 0;
      let elem;
      do {
        elem = document.getElementById(`${prefix}${inputPos}`);
        if (elem && pastedData[strIndex]) {
          elem.value = pastedData[strIndex];
          elem.dispatchEvent(new Event("input"));
          e.preventDefault();
        }
        strIndex++;
        inputPos++;
      } while (elem && strIndex < pastedData.length);
    };

    const loadValues = (tfaValue, prefix) => {
      if (tfaValue && tfaValue[0]) {
        inputVal = tfaValue[0].split("");
        inputVal.forEach((val, index) => {
          const inputElement = document.getElementById(`${prefix}${index}`);
          if (inputElement) {
            inputElement.value = val;
            inputElement.className =
              inputElement.className + " border border-solid border-red";
            inputElement.dispatchEvent(new Event("input"));
          }
        });
      }
    };