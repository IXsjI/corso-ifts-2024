import { registerBlockType } from "@wordpress/blocks";
import { __ } from "@wordpress/i18n";

import { InspectorControls, useBlockProps } from "@wordpress/block-editor";

import { PanelBody, RangeControl } from "@wordpress/components";

import json from "../block.json";
const { name, title, description } = json;

registerBlockType(name, {
  title: title,
  description: description,
  attributes: {
    blockId: {
      type: "string",
    },

    height: {
      type: "number",
      default: 5,
    },
    width: {
      type: "number",
      default: 50,
    },
    style: {
      type: "object",
      default: {
        color: {
          background: "#aabbcc",
        },
      },
    },
  },
  edit: (props) => {

    props.setAttributes({ blockId: props.clientId });

    const blockProps = useBlockProps();

    return (
      <>
        <InspectorControls key="styles" group="styles">
          <PanelBody title="Dimensione" initialOpen={true}>
            <RangeControl
              label="Altezza"
              help="Altezza in PX"
              value={props.attributes.height}
              onChange={(height) => props.setAttributes({ height })}
              min="1"
              max="10"
            />

            <RangeControl
              label="Larghezza"
              help="Larghezza in %"
              value={props.attributes.width}
              onChange={(width) => props.setAttributes({ width })}
              min="1"
              max="100"
            />
          </PanelBody>
        </InspectorControls>

        {/* 
          style={{height: `${props.attributes.height}px`, width: `${props.attributes.width}%`}}
        */}
        <hr {...blockProps}></hr>
        <style>
          {"#block-" +
            props.attributes.blockId +
            "{height:" +
            props.attributes.height +
            "px;" +
            "width: " +
            props.attributes.width +
            "%;" +
            "}"}
        </style>
      </>
    );
  },
  save: (props) => {
    const blockProps = useBlockProps.save({
      id: props.attributes.blockId,
      style: {
        width: props.attributes.width + "%",
        height: props.attributes.height + "px",
      },
    });

    return (
      <>
        <hr {...blockProps}></hr>
        <style>
          {/* {"#" +
            props.attributes.blockId +
            " {height: " +
            props.attributes.height +
            "px; " +
            "width: " +
            props.attributes.width +
            "%;" +
            "}"} */}
        </style>
      </>
    );
  },
});
