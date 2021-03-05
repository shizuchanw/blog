const filenames = [];
//let imgData;
//const colors = [[255, 0, 0], [0, 255, 0], [0, 0, 255], [255, 255, 0], [255, 170, 29], [97, 0, 161]];
//let globalImgData = "";



//collect file names; assign EventListener to each photo
const table = document.getElementsByTagName('table');
//1 table for now; in case i add more tables in the future ↓
for(let i = 0; i < table.length; ++i) {
	//get all images in the current table
    const imageElements = table[i].getElementsByTagName('img');
    for(let j = 0; j < imageElements.length; ++j) { 
    	filenames.push(imageElements[j].src);
        imageElements[j].addEventListener('click', function(){changePhoto(this.src);});
        imageElements[j].addEventListener('click', function(){showCaption(this.alt);});
    }
}


/*
This function changes the photo in the frame
	if click on the frame: display a random picture
	if click on a picture: display the picture in the frame
*/
function changePhoto(path)
{

}





