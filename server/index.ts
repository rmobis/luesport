import dotenv from 'dotenv';
import { createServer } from 'http';
import { parse } from 'url';
import next from 'next';

dotenv.config();

const port = parseInt(process.env.PORT || '3000', 10);
const dev = process.env.NODE_ENV !== 'production';
const app = next({ dev });
const handle = app.getRequestHandler();

app.prepare().then((): void => {
	createServer((req, res): void => {
		if (!req.url) {
			console.error('No URL available on request object', req);
			return;
		}

		const parsedUrl = parse(req.url, true);

		handle(req, res, parsedUrl);
	}).listen(port);

	console.log(
		`> Server listening at http://localhost:${port} as ${
			dev ? 'development' : 'production'
		}`
	);
});
