const app = new PIXI.Application();document.body.appendChild(app.view);const { stage } = app;
const brush = new PIXI.Graphics();
brush.beginFill(0xffffff);
brush.drawCircle(0, 0, 50);
brush.endFill();

app.loader.add('sfondo', '12.jpg');//PREMI
app.loader.add('p1', '13.jpg');app.loader.add ('p2', '14.jpg');
app.loader.load(setup);

function setup(loader, resources) {
    const background = new PIXI.Sprite(resources.sfondo.texture);
    stage.addChild(background);
    background.width = app.screen.width;
    background.height = app.screen.height;

    const imageToReveal = new PIXI.Sprite(resources.p1.texture);
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

    let dragging = false;

    function pointerMove(event) {
        if (dragging) {
            brush.position.copyFrom(event.data.global);
            app.renderer.render(brush, renderTexture, false, null, false);
        }
    }

    function pointerDown(event) {
        dragging = true;
        pointerMove(event);
    }

    function pointerUp(event) {
        dragging = false;
    }
}
