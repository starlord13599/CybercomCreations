const express = require('express');
const app = express();
const multer = require('multer');
const path = require('path');

const storage = multer.diskStorage({
	destination: (req, file, cb) => {
		cb(null, './uploads');
	},
	filename: (req, file, cb) => {
		cb(null, `${file.fieldname}${path.extname(file.originalname)}`);
	}
});

function checkExtension(req, file, cb) {
	const extensions = /jpg|jpeg/;

	const isValid = extensions.test(path.extname(file.originalname).toLowerCase());

	if (isValid) {
		return cb(null, true);
	}

	return cb('Cannot not upload this type of file');
}

const upload = multer({ storage: storage, fileFilter: checkExtension }).single('image');
app.set('view engine', 'ejs');

app.get('/', (req, res) => {
	res.render('../test/views/index');
});

app.post('/', (req, res, next) => {
	upload(req, res, (err) => {
		try {
			if (err) {
				throw err;
			}
			console.log('file uploaded successfully...');
		} catch (error) {
			next(error);
		}
	});

	res.send('👍');
});

app.listen(3000, () => console.log('Listening'));
