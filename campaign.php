<html>
 <head>
     <title>Fluid Width Flash Example</title>
 </head>

 <body style="margin:0; padding:0; border:0; background-color: #000000">
   <div id="allContent">
     <div  id="flashContent">
             <h1>Example SWF</h1>
             <p>Alternative content</p>
             <p><a href="http://www.adobe.com/go/getflashplayer"><img 
                  src="http://www.adobe.com/images/shared/
                         download_buttons/get_flash_player.gif"
                  alt="Get Adobe Flash player" /></a></p>
     </div>
   </div>   

   <div id="fb-root"></div>
   <script 
    src="http://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js" 
    type="text/javascript">
   </script>
   <script src="http://connect.facebook.net/en_US/all.js"></script>
   <script type="text/javascript">
    FB.init({
            appId  : 'APP ID',
        });

       function echoSize() {
            document.getElementById('allContent').style.height = "100%";
            console.log(window.innerWidth + ' x ' + window.innerHeight);
     }

    window.onresize = echoSize;

    //Flash display
    var flashvars = {};
    var params = {
            menu: "false",
            scale: "noScale",
            allowFullscreen: "true",
            allowScriptAccess: "always",
            bgcolor: "#FF0000"
         };
    var attributes = {
            id:"ExampleSWF"
        };
     
    swfobject.embedSWF(
            "example.swf",
            "flashContent",
            "100%",
            "100%",
            "10.0.0",
            "expressInstall.swf",
            flashvars,
            params,
            attributes
       );
   </script>
 </body>
</html>
Actionscript:

package {
    import flash.display.Sprite;
    import flash.events.Event;
    import flash.text.TextField;
    import flash.display.StageAlign;
    import flash.display.StageScaleMode;
    import flash.text.TextFormat;

    public class Main extends Sprite {
    private var _textBox:TextField = null;
    public function Main():void {
          if (stage) {
         init();
          }
           else {
          addEventListener(Event.ADDED_TO_STAGE, init);
          }
       }
        
        private function init(e:Event = null):void {
       removeEventListener(Event.ADDED_TO_STAGE, init);
            
       this._textBox = new TextField();
       this._textBox.x = 10;
       this._textBox.y = 10;
       this._textBox.textColor = 0xFFFFFF;
       this._textBox.width = 200;
            
       this.addChild(this._textBox);
       echoSize();
            
       stage.scaleMode = StageScaleMode.NO_SCALE;
       stage.align = StageAlign.TOP_LEFT;
       stage.addEventListener(Event.RESIZE, this.echoSize);
          }
        
       private function echoSize(e:Event = null):void {
     this._textBox.text = "SWF Width: " + stage.stageWidth
             + " Height: " + stage.stageHeight;     
     var myTextFormat:TextFormat = new TextFormat(null, 16);
     this._textBox.setTextFormat(myTextFormat);
        }   
    }
}