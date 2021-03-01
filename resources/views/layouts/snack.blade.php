<snackbar class="{{ $class }}">
{{ $message }}
</snackbar>

<script>
(function() {
  var that, snack;
  that = document.currentScript;
  snack = that.previousElementSibling;
  snack.classList.add('show');
  setTimeout(function(){ 
    snack.classList.remove('show'); 
  }, 3000);
})();
</script>

<style>
.success { background: #4CAF50; }
.danger { background: #f44336; }
.info { background: #2196F3; }
.warning { background: #ff9800; }

snackbar {
  opacity: 0;
  width: -moz-max-content;
  padding: 16px;
  border-radius: 2px;
  
  background: #333;
  color: #fff;
  text-align: center;
  
  z-index: 1;
  position: fixed;
  top: 30px;
  left: 50%;
  transform: translate(-50%);
}
snackbar.show {
  opacity: 1;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}
@keyframes fadein {
  from {top: 0; opacity: 0;}
  to {top: 30px; opacity: 1;}
}
@keyframes fadeout {
  from {top: 30px; opacity: 1;}
  to {top: 0; opacity: 0;}
}
</style>