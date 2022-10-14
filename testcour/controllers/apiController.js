const db = require('../db')
const repository = require('../db/canditatesRepository')


exports.index = async (req, res) => {
    // repository.getAll().then(result => {
        // res.json(result)
    // }).catch(err => {
        // console.error(err)
    // })

    try {
        let result = await repository.getAll()
        res.json(result)

    } catch (err) {
        console.error(err)
        res.status(500).end()
    }
}

exports.getById = async (req, res) => {
    try {
        const { id } = req.params
        // const id = req.params.id
        let result = await repository.getById(id)
        if(result === undefined) 
        {
            res.status(404).json({error: "404"})
        }
        res.json(result)
        console.log(result)
    } catch (err) {
        console.error(err)
        res.status(500).end()
    }
}

exports.add = async (req, res) => {
    console.log(req.body)
    const model = req.body
    // contrôle de saisie dans l'objet model manquant !!!! 
    let result = await repository.create(model)
    res.status(201).json(result)
}

exports.remove = async (req, res) => {
    let { id } = req.params
    let result = await repository.remove(id)
    res.status(202).end()
}