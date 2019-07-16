let allData = require('./t.json');
let lol = [3, 7, 14, 18, 19, 21, 22, 25, 26, 29, 30, 32, 33, 38, 39, 43, 46, 48, 51, 54, 55, 57, 58, 61, 65, 70, 72, 73, 75, 77, 82, 85, 92, 99, 100, 101, 104, 111, 114, 115, 117, 125, 127, 131, 132, 133, 134, 136, 137, 138, 139, 140, 144, 154, 157, 158, 160, 161, 162, 166, 168];
let clash = [3, 21, 22, 29, 30, 33, 38, 43, 46, 51, 54, 55, 57, 65, 73, 75, 82, 92, 101, 104, 134, 157];
let fifa = [3, 14, 21, 25, 29, 30, 38, 43, 46, 51, 54, 55, 61, 65, 73, 75, 92, 99, 101, 125, 134, 136, 144, 157, 160, 166];
let hs = [3, 19, 29, 30, 38, 43, 46, 51, 54, 55, 58, 65, 73, 75, 77, 92, 101, 117, 125, 127, 131, 134, 137, 140, 157];
let cs = [3, 14, 19, 25, 29, 30, 38, 43, 46, 54, 55, 57, 65, 70, 72, 73, 75, 92, 99, 101, 114, 117, 131, 132, 134, 137, 139, 140, 157];


const md5 = require('md5');
const sha1 = require('sha1');

for (let team of allData) {
	team.data = JSON.parse(team.data) || {};

	let hash = md5(sha1(team.email)).substring(7);

	if (lol.includes(team.id)) {
		for (var i = 1; i <= 10; i++) {
			let name = team.data['lol-playerName' + i];
			let doc = team.data['lol-playerDocNo' + i];

			if (name && doc) {
				console.log(`LoL\t${team.data.teamName} (${team.data.teamAbbr})\t${name}\t${doc}`);
			}
		}
	}

	if (cs.includes(team.id)) {
		for (var i = 1; i <= 10; i++) {
			let name = team.data['csgo-playerName' + i];
			let doc = team.data['csgo-playerDocNo' + i];

			if (name && doc) {
				console.log(`CS:GO\t${team.data.teamName} (${team.data.teamAbbr})\t${name}\t${doc}`);
			}
		}
	}

	if (clash.includes(team.id)) {
		for (var i = 1; i <= 2; i++) {
			let name = team.data['clash-playerName' + i];
			let doc = team.data['clash-playerDocNo' + i];

			if (name && doc) {
				console.log(`Clash\t${team.data.teamName} (${team.data.teamAbbr})\t${name}\t${doc}`);
			}
		}
	}

	if (fifa.includes(team.id)) {
		for (var i = 1; i <= 2; i++) {
			let name = team.data['fifa-playerName' + i];
			let doc = team.data['fifa-playerDocNo' + i];

			if (name && doc) {
				console.log(`FIFA\t${team.data.teamName} (${team.data.teamAbbr})\t${name}\t${doc}`);
			}
		}
	}

	if (hs.includes(team.id)) {
		for (var i = 1; i <= 2; i++) {
			let name = team.data['hs-playerName' + i];
			let doc = team.data['hs-playerDocNo' + i];

			if (name && doc) {
				console.log(`HS\t${team.data.teamName} (${team.data.teamAbbr})\t${name}\t${doc}`);
			}
		}
	}
}
