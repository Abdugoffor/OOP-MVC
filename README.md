# Loyihaning nomi

## Tavsif
Loyihangizning tavsifi bu yerda bo'ladi.

## O'rnatish
O'rnatish bo'yicha ko'rsatmalar.

## Foydalanish
Foydalanish bo'yicha ko'rsatmalar.

### Misol Kod
Bu yerda PHP kod misoli:

```html
<pre id="php-code">
    <code contenteditable="true">
        <?php
        echo "Salom, dunyo!";
        ?>
    </code>
</pre>
<button id="copy-button" onclick="copyToClipboard('#php-code')">Nusxa olish</button>
<button id="edit-button" onclick="toggleEditMode()">Tahrirlash</button>

<script>
function copyToClipboard(element) {
  var $temp = document.createElement("textarea");
  document.body.appendChild($temp);
  $temp.value = document.querySelector(element).textContent;
  $temp.select();
  document.execCommand("copy");
  document.body.removeChild($temp);
  alert("Clipboardga nusxa olindi!");
}
```
#bu test
```html
function toggleEditMode() {
  var codeElement = document.querySelector('#php-code code');
  var copyButton = document.getElementById('copy-button');
  var editButton = document.getElementById('edit-button');

  if (codeElement.contentEditable === "true") {
    codeElement.contentEditable = "false";
    editButton.textContent = "Tahrirlash";
    copyButton.disabled = false;
  } else {
    codeElement.contentEditable = "true";
    editButton.textContent = "Tahrirlashni yakunlash";
    copyButton.disabled = true;
  }
}
</script>
```
# bu test1
```html
text-copy
```
##text
