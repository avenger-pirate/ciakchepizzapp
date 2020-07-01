const app = new PIXI.Application(1200,1200);
document.body.appendChild(app.view);
const { stage } = app;
const brush = new PIXI.Graphics();
brush.beginFill(0xffffff);
brush.drawCircle(0, 0, 50);
brush.endFill();
app.loader
.add('sfondo', '12.jpg') //SFONDO
.add('p1', '13.jpg')   //PREMIO1
.add('p2', '14.jpg') //PREMIO2
.load(setup);

function setup(loader, resources) {    
const premiTextures = [
        PIXI.Texture.from('13.jpg'),
        PIXI.Texture.from('14.jpg'),
		PIXI.Texture.from('15.jpg'),

    ];

const casualNum = Math.floor(Math.random() * 3);
const background = new PIXI.Sprite(resources.sfondo.texture);    
stage.addChild(background);    
background.width = app.screen.width;    
background.height = app.screen.height; //https://www.w3schools.com/jsref/jsref_forin.asp
	 const imageToReveal = new PIXI.Sprite(premiTextures[casualNum]);
stage.addChild(imageToReveal);    
imageToReveal.width = app.screen.width;    
imageToReveal.height = app.screen.height;    
const renderTexture = PIXI.RenderTexture.create(app.screen.width, app.screen.height);    
const renderTextureSprite = new PIXI.Sprite(renderTexture);    
stage.addChild(renderTextureSprite);    
imageToReveal.mask = renderTextureSprite;    
app.stage.interactive = true;    
app.stage.on('pointerdown', pointerDown);    
app.stage.on('pointerup', pointerUp);    
app.stage.on('pointermove', pointerMove);    
app.stage.on('pointerout', pointerOut);                    
app.stage.on('removed', pointerOut);    

let dragging = false;    
function pointerMove(event) {        
if (dragging) {            
brush.position.copyFrom(event.data.global);            
app.renderer.render(brush, renderTexture, false, null, false);

}    
}
    
function pointerDown(event) {        
dragging = true;        
pointerMove(event);  }    

function pointerOut(event) {        
dragging = false; 
//alert("Hai vinto");
//window.location.href = 'http://ciakchepizza.com/m/dashboard.php';

        }   

function pointerUp(event) {        
dragging = false;    

}}