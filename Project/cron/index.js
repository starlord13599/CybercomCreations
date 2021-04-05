const cron = require('node-cron');
let count = 0;

cron.schedule('*/2 * * * * *', () => {
	console.log(count);
	count++;
});

if (count === 5) {
	console.log('triggered');
}
