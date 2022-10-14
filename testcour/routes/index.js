const express = require('express');
const req = require('express/lib/request');
const router = express.Router();

const homeController = require ('../controllers/homeController');
const apiController = require ('../controllers/apiController');


router.get('/', homeController.index)

router.get('/about', homeController.about)

router.get('/hello/:name', homeController.sayHello)

router.get('/api', apiController.index)

router.post('/api', apiController.add)

router.get('/api/:id', apiController.getById)

router.put('/api/:id', apiController.getById) // a modif !!!!

router.delete('/api/:id', apiController.remove)

router.all('*', (req, res) =>{
    res.status(404).send('Erreur 404 : pages non trouvée')
});

module.exports = router