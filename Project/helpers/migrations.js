const { umzug } = require('../core/migrations.js');
const confirm = require('prompt-confirm');

async function initialize() {
	const migrations = await umzug.pending();

	if (migrations.length == 0) return 'true';

	if (migrations.length > 0) {
		const answer = await new confirm('Migrations pending..wanna migrate?').run();

		if (!answer) throw 'Please complete the migrations first';

		return await umzug.up();
	}
}

function displayMigrations(arr) {
	if (!Array.isArray(arr)) return false;

	arr.forEach((migration) => {
		console.log(`Mirgrated ${migration.file}`);
	});
}

module.exports = { initialize, displayMigrations };
