import React from 'react';
import { createStyles, makeStyles, Theme, useTheme } from '@material-ui/core/styles';
import IconButton from '@material-ui/core/IconButton';
import Drawer from '@material-ui/core/Drawer';
import Divider from '@material-ui/core/Divider';
import ChevronLeftIcon from '@material-ui/icons/ChevronLeft';
import ChevronRightIcon from '@material-ui/icons/ChevronRight';
import ListItem from '@material-ui/core/ListItem';
import List from '@material-ui/core/List';
import ListItemIcon from '@material-ui/core/ListItemIcon';
import CustomListItemIcon from 'components/util/CustomListItemIcon';
import ListItemText from '@material-ui/core/ListItemText';
import InboxIcon from '@material-ui/icons/MoveToInbox';
import MailIcon from '@material-ui/icons/Mail';
import { OpenDrawerProps } from 'interfaces';
import clsx from 'clsx';
import LoLSVG from 'imgs/lol-icon.svg';
import ClashSVG from 'imgs/clash-icon.svg';
import HSSVG from 'imgs/hs-icon.svg';
import CSSVG from 'imgs/cs-icon.svg';

interface ESport {
	title: string;
	short: string;
	icon: string;
}

const drawerWidth = 240;

const useStyles = makeStyles((theme: Theme) => createStyles({
	drawer: {
		width: drawerWidth,
		flexShrink: 0,
		whiteSpace: 'nowrap'
	},
	drawerOpen: {
		width: drawerWidth,
		transition: theme.transitions.create('width', {
			easing: theme.transitions.easing.sharp,
			duration: theme.transitions.duration.enteringScreen
		})
	},
	drawerClose: {
		transition: theme.transitions.create('width', {
			easing: theme.transitions.easing.sharp,
			duration: theme.transitions.duration.leavingScreen
		}),
		overflowX: 'hidden',
		width: theme.spacing(7) + 1,
		[theme.breakpoints.up('sm')]: {
			width: theme.spacing(9) + 1
		}
	},
	toolbar: {
		display: 'flex',
		alignItems: 'center',
		justifyContent: 'flex-end',
		padding: '0 8px',
		...theme.mixins.toolbar
	}
}));

const Sidebar: React.FunctionComponent<OpenDrawerProps> = ({ open, setOpen }) => {
	const classes = useStyles();
	const theme = useTheme();

	function handleDrawerClose(): void {
		setOpen(false);
	}

	const esports: ESport[] = [
		{
			title: 'League of Legends',
			short: 'lil',
			icon: LoLSVG
		},
		{
			title: 'Counter-Strike',
			short: 'csgo',
			icon: CSSVG
		},
		{
			title: 'HearthStone',
			short: 'hs',
			icon: HSSVG
		},
		{
			title: 'Clash Royale',
			short: 'clash',
			icon: ClashSVG
		},
		{
			title: 'FIFA 2020',
			short: 'fifa',
			icon: LoLSVG
		}
	];

	return (
		<Drawer
			variant="permanent"
			className={clsx(classes.drawer, {
				[classes.drawerOpen]: open,
				[classes.drawerClose]: !open,
			})}
			classes={{
				paper: clsx({
					[classes.drawerOpen]: open,
					[classes.drawerClose]: !open,
				}),
			}}
			open={open}
		>
			<div className={classes.toolbar}>
				<IconButton onClick={(handleDrawerClose)}>
					{theme.direction === 'rtl' ? <ChevronRightIcon /> : <ChevronLeftIcon />}
				</IconButton>
			</div>
			<Divider />
			<List>

				{esports.map((esport) => (
					<ListItem button key={esport.short}>
						<CustomListItemIcon src={esport.icon} />
						<ListItemText primary={esport.title} />
					</ListItem>
				))}
			</List>
			<Divider />
			<List>
				{['All mail', 'Trash', 'Spam'].map((text, index) => (
					<ListItem button key={text}>
						<ListItemIcon>{index % 2 === 0 ? <InboxIcon /> : <MailIcon />}</ListItemIcon>
						<ListItemText primary={text} />
					</ListItem>
				))}
			</List>
		</Drawer>
	);
};

export default Sidebar;
