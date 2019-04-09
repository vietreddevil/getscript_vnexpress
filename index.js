var fs = require("fs");
var readline = require('readline');

var dirname = 'F:/a_data/';
var des_dirname = 'F:/new_data/';
async function asyncForEach(array, callback) {
  for (let index = 0; index < array.length; index++) {
    await callback(array[index], index, array);
  }
}
Array.prototype.forEach = function (callback) {
  // this represents our array
  for (let index = 0; index < this.length; index++) {
    // We call the callback for each entry
    callback(this[index], index, this);
  }
};
const waitFor = (ms) => new Promise(r => setTimeout(r, ms));
fs.readdir(dirname, function(err, filenames) {
	const start = async() => {
    await asyncForEach(filenames, async(filename) => {
      await waitFor(50);
      fs.readFile(dirname + filename, "utf-8", function(err, content) {
        var arrayContent = content.split('lol_PHP_EOL_lol');
        var content_to_index = "";
        arrayContent[0] = arrayContent[0].replace(/\"/g, '\\"').replace(/\'/g, '\\"');
        arrayContent[6] = arrayContent[6].replace(/\"/g, '\\"').replace(/\'/g, '\\"');

        content_to_index = '{"index":{"_index":"searchdb1","_type":"data"}}\r\n';
        content_to_index += '{ "title":"' + arrayContent[0] + '", "avatar_url":"' + arrayContent[1] + '","real_category":"' + arrayContent[2] + '", "category":"' + arrayContent[3] + ',' + arrayContent[4] + ',' + arrayContent[5] + '", "content":"' + arrayContent[6] + '" }\r\n';

        fs.writeFile(des_dirname + filename, content_to_index, (err)=> {
          if(err) {
            return console.log(err);
          }
          console.log("file " + filename + " successed!");
        });
      
      });
    });
  }
  start();
});