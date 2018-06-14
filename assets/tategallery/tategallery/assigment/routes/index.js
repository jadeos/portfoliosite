var express = require('express');
var router = express.Router();

// /* GET home page. */
router.get('/', function(req, res, next) {
    var db = req.db;
    var collection = db.get('artists');
    var collection2 = db.get('artworks');
    collection2.find({},{limit:10},function(e,docs){
        collection.find({},{limit:10},function(e,doc){
        res.render('index', {
            "artworks" : docs,
            "artists" : doc
             });
         });
    });
});

//* GET Artworks page. */
router.get('/artworks', function(req, res) {
    var db = req.db;
    var collection = db.get('artworks');
    var settings = db.get('settings');

    settings.find({}, function(e, docs){
            //if the theme value in db is default, render the default page, artworks.jade.
            if(docs[0].theme === "default"){
                console.log("default");
                collection.find({},{limit:10},function(e,doc){
                    res.render('artworks', {
                        "artworks" : doc,
                        "settings": docs
                    });
                });
            }else{
                //otherwise, ocean theme is set in db, so render the gallery.jade template which contains special stying for the ocean theme.
                console.log("not default");
                collection.find({},{limit:10},function(e,doc){
                    res.render('gallery', {
                        "artworks" : doc,
                        "settings": docs
                    });
                });
            }
    });

})

//* GET artists page. */
router.get('/artists', function(req, res) {
    var db = req.db;
    var collection = db.get('artists');
    var settings = db.get('settings');

    settings.find({}, function(e, docs){
        //if the theme value is default, render the normal artist page
        if(docs[0].theme === "default"){
            console.log("default");
            collection.find({},{limit:10},function(e,doc){
                res.render('artists', {
                    "artists" : doc,
                    "settings": docs
                });
            });
        }else{
            //otherwise, ocean is the theme. Render the art jade page. This has a different div id to artist.jade, which triggers the styling of the page.
            console.log("not default");
            collection.find({},{limit:10},function(e,doc){

                res.render('art', {
                    "artists" : doc,
                    "settings": docs
                });
            });
        }
    });

})

//settings page
router.get('/settings', function(req, res, next) {
    var db = req.db;
    var settings = db.get("settings");

    settings.find({},function(e,docs) {

        res.render('settings', {title: 'Settings', "settings": docs});
    })

});

//handles all settings by posting to the database the value ocean or default.
router.post("/settings/submit", function(req,res){
   var db = req.db;
   var settings = db.get("settings");
   var display = req.body.theme;

    if(display == undefined){
        display = "default";
    }

   //get the current theme before posting
     settings.find({}, function(e, docs){
        //if the theme value is default, render the normal artist page
                res.render('settings', {
                    "settings": docs
                });
            });



    settings.update({}, {$set: {theme : display}});
    res.redirect('../');
});
module.exports = router;
