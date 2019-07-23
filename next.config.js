import dotenv from 'dotenv';
import path from 'path';
import Dotenv from 'dotenv-webpack';

dotenv.config();

export default {
	webpack: config => {
		config.plugins = config.plugins || [];

		config.plugins = [
			...config.plugins,

			// Read the .env file
			new Dotenv({
				path: path.join(__dirname, '.env'),
				systemvars: true
			})
		];

		return config;
	}
};
