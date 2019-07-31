import * as React from 'react';
import { createStyles, makeStyles, Theme } from '@material-ui/core/styles';
import Head from 'next/head';
import Container from '@material-ui/core/Container';
import CssBaseline from '@material-ui/core/CssBaseline';
import Menu from '../components/Menu';
import Sidebar from '../components/Sidebar';


interface Props {
	title?: string;
}

const useStyles = makeStyles((theme: Theme) => createStyles({
	root: {
		display: 'flex',
		padding: theme.spacing(0)
	},
	main: {
		padding: theme.spacing(3),
		flexGrow: 1
	},
	toolbar: {
		display: 'flex',
		alignItems: 'center',
		justifyContent: 'flex-end',
		padding: '0 8px',
		...theme.mixins.toolbar,
	}
}));

const Layout: React.FunctionComponent<Props> = ({ children, title = 'Next.js v9 Playground' }): JSX.Element => {
	const classes = useStyles();
	const [open, setOpen] = React.useState(false);

	return (
		<Container maxWidth={false} className={classes.root}>
			<CssBaseline />

			<Head>
				<title>{title}</title>
			</Head>

			<Menu open={open} setOpen={setOpen} />
			<Sidebar open={open} setOpen={setOpen} />
			<main className={classes.main}>
				<div className={classes.toolbar} />
				{children}
				<footer>
					<hr />
					<span>I&apos;m here to stay (Footer)</span>
				</footer>
			</main>
		</Container>
	);
};

export default Layout;
