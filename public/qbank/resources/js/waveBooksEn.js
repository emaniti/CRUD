// 1- Active Trace 

const activePenTool = ({optionsContainer:optionsContainer , layerTool:layerTool}) =>{

    /**
     * Initial Html Dom
     * Pen Tools
     */
    initElements(layerTool)
setTimeout(() => {
    initPenTool(optionsContainer,layerTool)
}, 500);

}
const initElements = (layerTool)=>{
    var penToolElem = document.createElement('Div');
    penToolElem.classList += 'pen-tool';
    var colorPicker = document.createElement('input');
    colorPicker.type = 'color';
    colorPicker.id = 'color-picker';
    colorPicker.value = '#000000';
    colorPicker.classList += ' js-color-picker  color-picker';
    var range = document.createElement('input');
    range.type = 'range';
    range.id = 'line-weight';
    range.classList += ' js-line-range';
    range.min = '1';
    range.max = '72';
    range.value = '1';
    var selectMode = document.createElement('select');
    selectMode.id = 'tool';
    var selectModebrush = document.createElement('option');
    selectModebrush.value = 'brush';
    selectModebrush.text = 'Brush';
    selectModebrush.selected = true;
    var selectModeraser = document.createElement('option');
    selectModeraser.value = 'eraser';
    selectModeraser.text = 'Eraser';
    penToolElem.appendChild(colorPicker)
    penToolElem.appendChild(range)
    penToolElem.appendChild(selectMode)
    selectMode.appendChild(selectModebrush)
    selectMode.appendChild(selectModeraser)
    document.getElementById(layerTool).appendChild(penToolElem)
} 
const initPenTool = (optionsContainer,layerTool) =>{
    /**
     * Initial Pen Tools
    */
    // config Pen Tool Layer
    var width = document.getElementById(layerTool).offsetWidth;
    var height = document.getElementById(layerTool).offsetHeight;
    // first we need Konva core things: stage and layer
    var stage = new Konva.Stage({
        container: optionsContainer,
        width: width,
        height: height
        });
    
        var layer = new Konva.Layer();
        stage.add(layer);
    
    // then we are going to draw into special canvas element
        var canvas = document.createElement('canvas');
        canvas.width = stage.width();
        canvas.height = stage.height();
    
    // created canvas we can add to layer as "Konva.Image" element
        var image = new Konva.Image({
        image: canvas,
        x: 0,
        y: 0
        });
        layer.add(image);
        stage.draw();
    
    // Good. Now we need to get access to context element
        var context = canvas.getContext('2d');
        context.strokeStyle = '#000';
        context.lineJoin = 'round';
        context.lineWidth = 5;
        document.getElementById('color-picker').addEventListener('change',(e)=>{
        context.strokeStyle=e.target.value
        })
        document.getElementById('line-weight').addEventListener('change',(e)=>{
        context.lineWidth=e.target.value
        })
    
        var isPaint = false;
        var lastPointerPosition;
        var mode = 'brush';
    
    // now we need to bind some events
    // we need to start drawing on mousedown
    // and stop drawing on mouseup
        image.on('mousedown touchstart', function() {
        isPaint = true;
        lastPointerPosition = stage.getPointerPosition();
        });
    
    // will it be better to listen move/end events on the window?
    
        stage.on('mouseup touchend', function() {
        isPaint = false;
        });
    
    // and core function - drawing
        stage.on('mousemove touchmove', function() {
        if (!isPaint) {
        return;
        }
    
        if (mode === 'brush') {
        context.globalCompositeOperation = 'source-over';
        }
        if (mode === 'eraser') {
        context.globalCompositeOperation = 'destination-out';
        }
        context.beginPath();
    
        var localPos = {
        x: lastPointerPosition.x - image.x(),
        y: lastPointerPosition.y - image.y()
        };
        context.moveTo(localPos.x, localPos.y);
        var pos = stage.getPointerPosition();
        localPos = {
        x: pos.x - image.x(),
        y: pos.y - image.y()
        };
        context.lineTo(localPos.x, localPos.y);
        context.closePath();
        context.stroke();
    
        lastPointerPosition = pos;
        layer.batchDraw();
        });
    
        var select = document.getElementById('tool');
        select.addEventListener('change', function() {
        mode = select.value;
        });
} 
// CheckValidity 
const checkValidity = message =>{
    if (message === true) {
        const items =  [
            '../../resources/audio/right-1.mp3' ,
            '../../resources/audio/right-3.mp3',
            '../../resources/audio/right-2.mp3',
            ];
            let randomNumb = Math.floor(Math.random() * 3);
            var item = items[randomNumb];
            const itemsMessage =  [
            'Good Job' ,
            'Excellent',
            'Super'
            ];
            var itemMessage = itemsMessage[randomNumb];
            document.getElementById('valid-message-text').textContent = itemMessage;
            document.getElementById('validate-message').style.color = '#27ae60' ;
            document.getElementById('validate-message').style.borderColor = '#27ae60' ;
            document.getElementById('like-icon').classList = 'fas fa-thumbs-up' ;
            $("#validate-message").animate({left: '10px'});
            var audio = new Audio(item);
            audio.play()  
            setTimeout(() => {
                $("#validate-message").animate({left: '-100%'});
            }, 1500);
            return true;
    }else if(message === false){
        document.getElementById('validate-message').style.color = '#c0392b' ;
        document.getElementById('valid-message-text').textContent = "Please Try Again";
        document.getElementById('valid-message-text').style.fontSize = '3vw';
        document.getElementById('validate-message').style.borderColor = '#c0392b' ;
        document.getElementById('like-icon').classList = 'fas fa-thumbs-down' ;
        $("#validate-message").animate({left: '10px'});
        var audio = new Audio('../../resources/audio/wrong-1.mp3');
        audio.play()   
        setTimeout(() => {
            $("#validate-message").animate({left: '-100%'});
        }, 1500);
        }
        return false;
}

const initValidation = ( className ) =>{
    document.querySelectorAll(className).forEach(elem=>(
        elem.addEventListener('input',
        ()=> elem.value === elem.getAttribute('validValue') ? checkValidity(true) : checkValidity(false))
    ))
    
}
const initChoose = ( className ) =>{
    document.querySelectorAll(className).forEach(elem=>(
        elem.addEventListener('click',
        ()=> elem.getAttribute('validValue') == 'true' ? checkValidity(true) : checkValidity(false))
    ))
    
}
const initCircle = ( className ) =>{
    document.querySelectorAll(className).forEach(elem=>(
        elem.addEventListener('click',
        ()=> elem.getAttribute('validValue') == 'true' ? checkValidity(true) : checkValidity(false))
    ))
}




