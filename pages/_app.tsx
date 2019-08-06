import React from 'react';
import App, { Container as NextContainer } from 'next/app';
import Head from 'next/head';
import { ThemeProvider } from '@material-ui/styles';
import CssBaseline from '@material-ui/core/CssBaseline';
import theme from 'components/core/theme';

class MyApp extends App {
	public componentDidMount(): void {
		// Remove the server-side injected CSS.
		const jssStyles = document.querySelector('#jss-server-side');

		if (jssStyles && jssStyles.parentNode) {
			jssStyles.parentNode.removeChild(jssStyles);
		}
	}

	public render(): JSX.Element {
		const { Component, pageProps } = this.props;

		return (
			<NextContainer>
				<Head>
					<title>My page</title>
				</Head>
				<ThemeProvider theme={theme}>
					{/* CssBaseline kickstart an elegant, consistent, and simple baseline to build upon. */}
					<CssBaseline />
					<Component {...pageProps} />
				</ThemeProvider>
			</NextContainer>
		);
	}
}

export default MyApp;
