const express = require('express');
const app = express();
const umzug = require('umzug');
const path = require('path');
const sequelize = require('sequelize');
const {
    urlencoded
} = require('body-parser');

const PORT = process.env.PORT || 3000

const Sequelize = new sequelize({
    dialect: 'mysql',
    storage: 'inno'
});

const Umzug = new umzug({

    migrations: {
        path: path.join(__dirname, './migrations'),
        params: [
            Sequelize.getQueryInterface()
        ]
    },
    storage: 'sequelize',
    storageOptions: {
        sequelize: sequelize
    }

})

app.set('view engine', 'ejs')

app.use(urlencoded({
    extended: true
}))
app.use(logging);

app.get('/', (req, res) => {


    let {
        adminName,
        message
    } = req.admin

    if (adminName) {
        message = "you r logged in"
    }


    const data = {
        message,
        adminName,
        hobbies: ['dancing', 'singing', 'cricket']
    }

    const info = {
        name,
        age
    } = req.query

    res.render('index', {
        data: data,
        info: info
    });
}).post('/', (req, res, next) => {

    console.log(req.body);
    res.redirect(`/?name=${req.body.info.admin.name}&age=${req.body.info.admin.age}`)

})


app.get('/route1', (req, res) => {
    res.send("HELLo")

})

app.get('/map', (req, res) => {

    const infos = [{
            name: 'Alice',
            age: '18'
        },
        {
            name: 'Bob',
            age: '25'
        },
        {
            name: 'Clint',
            age: '34'
        },
        {
            name: 'David',
            age: '22'
        },
        {
            name: 'Erin',
            age: '27'
        },
    ]

    const infos_names = infos.map((info) => {

        return {
            name: info.name,
            isAdult: info.age > 18 ? true : false
        }
    })

    res.send(infos_names)
})


app.get('/forin', (req, res) => {

    const infos = [{
        name: 'Alice',
        age: '18'
    }]

    res.send("from for in")
})

app.listen(PORT, async () => {
    console.log(await Umzug.pending());
    console.log(`RUNNING ON ${PORT}`);
})

function logging(req, res, next) {

    const admin = req.query.admin

    if (admin) {
        req.admin = {
            "isLogged": true,
            "adminName": admin,
            "message": "Successfully logged in"
        };
    } else {
        req.admin = {
            "isLogged": false,
            "adminName": admin,
            "message": "Admin not found"
        };
    }
    next();

}