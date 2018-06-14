var express = require('express');
var router = express.Router();

/* GET users listing. */
router.get('/', function(req, res, next) {
  res.send('respond with a resource');
});

/* Access artworks page */
router.get('/artworks', function(req, res){
    res.render('artworks',{  });
});
/*
 * GET artworks
 */
// router.get('/artworks', function(req, res) {
//     var db = req.db;
//     var collection = db.get('artworks');
//     collection.find({},{},function(e,docs){
//         res.json(docs);
//     });
// });
/* GET Userlist page. */
router.get('/artworks', function(req, res) {
    var db = req.db;
    var collection = db.get('artworks');
    collection.find({},{},function(e,docs){
        res.render('artworks', {
            "artworks" : docs
        });
    });
});
module.exports = router;




