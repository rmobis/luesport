/// <reference types="next" />
/// <reference types="next/types/global" />

declare module 'next-optmized-images';

declare module '*.svg' {
	const value: string;
	export = value;
}
