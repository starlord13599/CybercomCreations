module.exports = {
	test: function(req, res, next) {
		//code goes here
		next();
	},

	setHeader: function(req, res, next) {
		//code goes
		res.header('Access-Control-Allow-Origin', '*');
		next();
	}
};
