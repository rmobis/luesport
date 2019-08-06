import dotenv from 'dotenv';
import path from 'path';
import Dotenv from 'dotenv-webpack';
import withImages from 'next-optimized-images';

dotenv.config();

export default withImages({
	webpack: config => {
		config.plugins = config.plugins || [];

		config.plugins = [
			...config.plugins,

			// Read the .env file
			new Dotenv({
				path: path.join(__dirname, '.env'),
				systemvars: true
			}),
		];

		config.resolve = config.resolve || {};
		config.resolve.modules = config.resolve.modules || [];

		config.resolve.modules = [
			...config.resolve.modules,

			__dirname
		];

		return config;
	}
});
